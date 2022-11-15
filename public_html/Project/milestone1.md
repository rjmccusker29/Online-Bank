<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Ryan McCusker(rjm8)</td></tr>
<tr><td> <em>Generated: </em> 4/3/2022 11:02:59 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/rjm8" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453442-a5fe4b49-73ae-40ea-b99d-c2cd066075b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register page, contains text boxes for email, username, password, and confirm password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453533-c6651514-99bd-4be0-ab3a-3e1e86f8a3b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email is required<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453551-9173490b-e73f-4c9f-9f3f-899eb24709d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email is not valid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453601-5ae812f1-db99-4da7-bb1d-390b3ea11109.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username is required<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453651-2691151c-07af-4ecc-8bd6-a9db19a3ad9f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Passwords must match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453840-692413f2-f90c-4350-a6be-c0963ba1f06a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User is notified if email/username is already taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454178-8196ded4-74bb-4f0d-bd4a-47dd95d6fdfe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If there are no errors, the user will successfully register<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453939-b8e20d00-6ab2-4d48-ae89-da8cf485306c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User table contains id, email, password (hashed), created, modified, and username columns<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/13">https://github.com/rjm8/IT202-008/pull/13</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/35">https://github.com/rjm8/IT202-008/pull/35</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>A form has text boxes to fill out. When submit is clicked, the<br>form is posted and each field is validated. If there is an error,<br>it is printed to the screen. If there is not an error, the<br>data from the POST is entered in the database.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454202-5cc44e6d-ccf7-4b2c-81c3-fe474e6cb41b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login page has text box for email/username and password and a submit button<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454238-e17d1bbd-89ee-445c-9c3d-c100aa84b74e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error when password is not entered<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454298-c57807ce-1603-4f0e-9932-d170d0c355de.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error if email/username not found<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454337-dd3d2644-13b9-4bff-8b58-af84209f54b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error if password is incorrect<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454525-f55b0184-981c-4b59-b498-d7ec0017f925.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error if username/email is not valid for the field<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454393-ed70c2f1-fb50-4f58-b945-1469a4541c45.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A successful login takes the user to their homepage where they are given<br>a greeting<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/14">https://github.com/rjm8/IT202-008/pull/14</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/35">https://github.com/rjm8/IT202-008/pull/35</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/34">https://github.com/rjm8/IT202-008/pull/34</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When the submit button is pressed, the fields are validated (if they are<br>not valid, the user receives an error and the form is not posted).<br>The fields are then compared with entries in the Users data table. If<br>the username/email exists in the table, the inputted password is compared with the<br>hash of the password for the matched user. If the passwords match, the<br>user information is saved for the session and the user is sent to<br>the home page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454773-21e5e475-34d0-4e36-b133-26bc0af21b4d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User is logged out and redirected to the login page with a message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454819-4124862e-64ed-4a0d-9549-d538279b6cf6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The url was altered to go to home.php, but since the user was<br>logged out and the session was destroyed, the user received an error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/14">https://github.com/rjm8/IT202-008/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When the logout button is pressed, the user is redirected to login page,<br>the user receives a message, and the session is destroyed. Destroying the session<br>will block the user from goin onto restricted pages until they log in<br>again.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161454819-4124862e-64ed-4a0d-9549-d538279b6cf6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The url was altered to go to home.php, but since the user was<br>logged out and the session was destroyed, the user received an error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161463079-dce686f4-d8cd-49d2-8491-9c18a3d4a2eb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The url was changed to admin/create_role.php while logged in as a non-admin; the<br>user was shown an error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161463214-be4ca2a2-b041-4770-9add-0e988238d259.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table contains 4 roles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161463269-1c1c77b3-a1c8-477c-b541-2c8e3af5d8fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRoles table; only one user is assigned a role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/14">https://github.com/rjm8/IT202-008/pull/14</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/33">https://github.com/rjm8/IT202-008/pull/33</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/18">https://github.com/rjm8/IT202-008/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Login-protected pages call an is_logged_in function. The function checks if the session has<br>a defined user. There will be no defined user if a user never<br>logged in or if a user has been logged out. If there is<br>no user in the session, the user is redirected to the login page<br>and showed a message. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Role-protected pages call a has_role function. The function checks the UserRoles table to<br>see if the current user has the role required to access the page.<br>If not, the user remains on whatever page they were on and a<br>message is shown. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453442-a5fe4b49-73ae-40ea-b99d-c2cd066075b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register page has styling that affects colors and sizes of many aspects of<br>the page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/36">https://github.com/rjm8/IT202-008/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The navigation list was placed in a single line at the top of<br>the page; the background color was changed and hovering over each link makes<br>it darker. Form input boxes were made larger and span the whole width<br>of the page. The submission button was made bigger and changed color.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161453551-9173490b-e73f-4c9f-9f3f-899eb24709d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The error when an email is invalid is user friendly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/16">https://github.com/rjm8/IT202-008/pull/16</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/17">https://github.com/rjm8/IT202-008/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>When there is an error, a flash function is called. The flash function<br>takes in an error message and an error type. A new div is<br>created just below the nav bar containing the error message with a background<br>color corresponding to the error type. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161465035-6087ff55-1cb6-4b8c-a14b-1e62a1172663.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The profile page of a logged in user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/18">https://github.com/rjm8/IT202-008/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>There is a form with text boxes for email, username, current password, new<br>password, and confirm new password. The email and username are prefilled with the<br>data from the Users table. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161465378-7c960400-e9c0-495a-896f-2872c2e4e6f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page after profile is edited<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161465035-6087ff55-1cb6-4b8c-a14b-1e62a1172663.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page before profile is edited<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161465378-7c960400-e9c0-495a-896f-2872c2e4e6f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page after profile is edited<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/18">https://github.com/rjm8/IT202-008/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Changing Username and Email will update the corresponding data in the Users table.<br>If password is being reset, the two new passwords will be compared to<br>make sure they are valid and the same. If they are, the current<br>password will be compared to the hashed password in the Users table. If<br>the passwords match, the password in the Users table will be updated to<br>a hashed version of the new password. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161466832-658764d4-aa65-4d73-94ed-33ce586ad48e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md file with all Milestone 1 deliverables filled out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/161466980-3021ef3b-c124-4aa3-ad7f-14a556175018.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board with all 9 issues from Milestone 1 completed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/rjm8" target="_blank">Grading</a></td></tr></table>
