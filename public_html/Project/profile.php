<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
<?php

$public_query = "SELECT visibility FROM Users WHERE id = :id";
$db = getDB();
$public_stmt = $db->prepare($public_query);
try {
    $public_stmt->execute([":id" => get_user_id()]);
    $public_result = $public_stmt->Fetch(PDO::FETCH_ASSOC);
    $visibility = $public_result["visibility"];


    if (isset($_POST["save"])) {
        if ($visibility == 0) {
            $email = se($_POST, "email", null, false);
        } else {
            $email = get_user_email();
        }
        $username = se($_POST, "username", null, false);
        $firstname = se($_POST, "firstname", null, false);
        $lastname = se($_POST, "lastname", null, false);

        $params = [":email" => $email, ":username" => $username, ":firstname" => $firstname, ":lastname" => $lastname, ":id" => get_user_id()];
        $db = getDB();
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, first_name = :firstname, last_name = :lastname where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            if ($e->errorInfo[1] === 1062) {
                //https://www.php.net/manual/en/function.preg-match.php
                preg_match("/Users.(\w+)/", $e->errorInfo[2], $matches);
                if (isset($matches[1])) {
                    flash("The chosen " . $matches[1] . " is not available.", "warning");
                } else {
                    //TODO come up with a nice error message
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                //TODO come up with a nice error message
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        }
        //select fresh data from table
        $stmt = $db->prepare("SELECT id, email, username, first_name, last_name from Users where id = :id LIMIT 1");
        try {
            $stmt->execute([":id" => get_user_id()]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                //$_SESSION["user"] = $user;
                $_SESSION["user"]["email"] = $user["email"];
                $_SESSION["user"]["username"] = $user["username"];
                $_SESSION["user"]["first_name"] = $user["first_name"];
                $_SESSION["user"]["last_name"] = $user["last_name"];
            } else {
                flash("User doesn't exist", "danger");
            }
        } catch (Exception $e) {
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }


        //check/update password
        $current_password = se($_POST, "currentPassword", null, false);
        $new_password = se($_POST, "newPassword", null, false);
        $confirm_password = se($_POST, "confirmPassword", null, false);
        if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
            if ($new_password === $confirm_password) {
                //TODO validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }

    if (isset($_POST["btn_invis"])) {
        $invis_query = "UPDATE Users SET visibility = 1 WHERE id = :id";
        $db = getDB();
        $invis_stmt = $db->prepare($invis_query);
        try {
            $invis_stmt->execute([":id" => get_user_id()]);
            flash("Successfully hid profile", "success");
        } catch (Exception $e) {
            flash("There was a problem making your profile invisible", "danger");
        }
    } else if (isset($_POST["btn_visible"])) {
        $vis_query = "UPDATE Users SET visibility = 0 WHERE id = :id";
        $db = getDB();
        $vis_stmt = $db->prepare($vis_query);
        try {
            $vis_stmt->execute([":id" => get_user_id()]);
            flash("Successfully unhid profile", "success");
        } catch (Exception $e) {
            flash("There was a problem making your profile visible", "danger");
        }
    }
} catch (Exception $e) {
    flash("There was an issue finding your profile visibility");
}
?>

<?php
$email = get_user_email();
$username = get_username();
$firstname = get_firstname();
$lastname = get_lastname();
?>
<form method="POST" onsubmit="return validate(this);">
    <?php if ($visibility == 0) : ?>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php se($username); ?>" />
    </div>
    <div class="mb-3">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" value="<?php se($firstname); ?>" />
    </div>
    <div class="mb-3">
        <label for="lasttname">Last Name</label>
        <input type="text" name="lastname" id="lastname" value="<?php se($lastname); ?>" />
    </div>
    <!-- DO NOT PRELOAD PASSWORD -->
    <div>Password Reset</div>
    <div class="mb-3">
        <label for="cp">Current Password</label>
        <input type="password" name="currentPassword" id="cp" />
    </div>
    <div class="mb-3">
        <label for="np">New Password</label>
        <input type="password" name="newPassword" id="np" />
    </div>
    <div class="mb-3">
        <label for="conp">Confirm Password</label>
        <input type="password" name="confirmPassword" id="conp" />
    </div>
    <input type="submit" value="Update Profile" name="save" />
</form>
<?php if ($visibility == 0) : ?>
    <form method="POST">
        <input type="submit" value="Make Profile Invisible" name="btn_invis" />
    </form>
<?php endif; ?>
<?php if ($visibility == 1) : ?>
    <form method="POST">
        <input type="submit" value="Make Profile Visible" name="btn_visible" />
    </form>
<?php endif; ?>

<script>
    function validate(form) {
        let email = form.email.value;
        let username = form.username.value;
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
            isValid = false;
            flash("Email is invalid", "alert alert-warning");
        }

        if (!/^[a-zA-Z0-9]+$/.test(username)) {
            isValid = false;
            flash("Username is invalid", "alert alert-warning");
        }

        if (pw !== con) {
            //find the container
            let flash = document.getElementById("flash");
            //create a div (or whatever wrapper we want)
            let outerDiv = document.createElement("div");
            outerDiv.className = "row justify-content-center";
            let innerDiv = document.createElement("div");

            //apply the CSS (these are bootstrap classes which we'll learn later)
            innerDiv.className = "alert alert-warning";
            //set the content
            innerDiv.innerText = "Password and Confirm password must match";

            outerDiv.appendChild(innerDiv);
            //add the element to the DOM (if we don't it merely exists in memory)
            flash.appendChild(outerDiv);

            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>