<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Bank Project</td></tr>
<tr><td> <em>Student: </em> Ryan McCusker(rjm8)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 1:01:39 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-bank-project/grade/rjm8" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167989271-77ac0d94-fa1a-4e46-9d4e-384ed9daa743.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table with visibility column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167989545-e4d02373-f422-45c5-ae6e-b9024b468007.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users have a button to make profile invisible (button changes if profile is<br>already invisible)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167989819-b8bc0237-8fdf-4bb7-a827-6d4fc94d9ae9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before making profile invisible, email is shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167989725-313369e0-f074-4dc6-9d0a-46717e3a52d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email is no longer shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/86">https://github.com/rjm8/IT202-008/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/profile.php">https://rjm8-prod.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>A visibility column was added to the Users table. When the profile page<br>is loaded, a query finds the users visibility. If the user is visible,<br>the div containing the email is shown, and there is a button to<br>make the user invisible. If not, the email is not shown and there<br>is a button to make the user visible. If the user is invisible<br>and tries to update their account, the email will remain the same (they<br>have to make themselves visible to update email).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to open a savings account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the create account page for savings with the form filled in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167990207-6ff7f2a6-4c68-4662-af4e-9edbdce1a6d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create account page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the code that determines the APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167990707-4553aa2f-374e-4e84-8a02-d3cfd24885e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>APY is defaulted to 0.15 unless otherwise stated. I don&#39;t think there was<br>a reason to create a specific APY, so I only every used default<br>value.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the related error and success messages when creating a savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167990883-9361f601-4a7e-4870-a269-3d713bdd2590.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error when depositing a negative value<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167990990-93e65a54-119a-4ae8-b7af-a680e7232dc5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After successful deposit user is redirected to accounts page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the db showing the new savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167991126-2901740a-a6c7-4c79-a79c-b7185cfae465.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account at the bottom is the new savings account. Account type 3 represents<br>savings<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/81">https://github.com/rjm8/IT202-008/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/create_savings_account.php">https://rjm8-prod.herokuapp.com/Project/create_savings_account.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the logic behind the APY value</td></tr>
<tr><td> <em>Response:</em> <p>The APY value is stored on a SystemProperties table. That table has a<br>foreign key referencing the id from Accounts table. So if I want to<br>select an accounts APY, I select apy from SystemProperties where account_id = get_account_id().<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to take out a loan </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the form for opening a loan along with the system generated APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167991539-4699b3a1-7c18-4fd0-b7c4-1a47ec692ba6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Loan form. The APY is set as the default from the SystemProperties table,<br>as shown before. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing the user's accounts that can be deposited into</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167993079-1a4fd930-6dd4-4e63-8188-9daa5d9c4a5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts of the current user that are not frozen or closed can be<br>deposited into (including other loans). Account number starting with 2 is closed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot from the db showing the loan account has a negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167991971-b8e837a6-2649-4e9e-9927-8b23f48ae753.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The last row in the table. Account balance is negative. (There are other<br>loans in the table with a positive balance; this is from testing before<br>the product was finalized)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot from the User's account list page showing the loan displaying as a positive value</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167992065-256b0014-6da9-49e8-8dac-425cc237efd1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The last row in the table. Account balance is positive. (There are other<br>loans in the table with a negative balance; this is from testing before<br>the product was finalized)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the code logic for updating the loan's balance per the requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167992313-f154a573-37e0-47b4-b1e4-8d688de982e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Balance is updated as per the standard do_transfer() function. Users can transfer money<br>into the loan account. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot showing user can't transfer more money from a loan account (alternatively don't show loan accounts in the dropdown for transfer transactions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167992562-dd6be892-b689-4636-9c6f-06a5e89b63c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The transfer form is shown. The loan account just created (beginning with 15)<br>is not shown in the source account options<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add screenshots of any other errors and success</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167992892-03990498-2098-4454-b8c0-dd08858a0f58.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167993373-e76ec0a4-19f5-4f34-a670-a86978fe924d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer more than the loan balance into loan<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/83">https://github.com/rjm8/IT202-008/pull/83</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to create/open loan page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/loan.php">https://rjm8-prod.herokuapp.com/Project/loan.php</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain the special code implementations for loans</td></tr>
<tr><td> <em>Response:</em> <p>The code is almost exactly the same as the code for creating a<br>checking account. The only things changed are the minimum balance (raised to 500)<br>and the insertion of a row into SystemProperties<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Listing accounts should show applicable APY or - if none is set for a particular account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the account list showing a combination of checkings, savings, loans, etc</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167993631-ac3737a2-0b57-4dc8-aa51-38a525f50f22.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts page showing relevant APY<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/83">https://github.com/rjm8/IT202-008/pull/83</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Account list page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/accounts.php">https://rjm8-prod.herokuapp.com/Project/accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> User will be able to close an account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing validation that an account can't be closed if it has a balance (regular account and loan)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167993800-317392c2-d152-407b-8f87-78fa2c1f88f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error when trying to close an account with balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot from the DB showing a closed account as inactive</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167993902-4ff938d3-f856-4d19-853d-e9dc11918f73.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account with id 6 is inactive with balance 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the various account list queries (in the code) showing the changes to use is_active (be sure to include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167994049-cc5cdde6-c199-4043-a66a-efcb0e25f00a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In transfer page, account is only shown if it is active. This exact<br>line of code is shown in many other files. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/83">https://github.com/rjm8/IT202-008/pull/83</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to the page where a user can close an account</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/transactions.php">https://rjm8-prod.herokuapp.com/Project/transactions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin role </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of user search with search results shown (show the user's name, link to view their accounts, link to open account, and link/button to deactivate user)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167994275-fc7f85ea-4ece-4cf3-85ce-16f37afa80e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Search users page after a search.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the updated User's table of the new is_active column</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167994434-fe40d803-0523-494c-9df6-cbce6222395f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table with is_active column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the admin's view of listing another user's account (from the user search results link) Show a mix of frozen and unfrozen accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167994527-ec8c5076-b0f1-4787-9e6e-b58873652bfc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Viewing another user&#39;s accounts. Some are frozen.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the admin's view of listing another user's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167994603-c72ea4a2-ac17-47ca-bcf3-ecda940c6b31.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction page from the Admin perspective is almost exactly the same as from<br>User perspective. Only difference is freeze button.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of account lookup page with partial result matches (ensure it has links to the transactions page of the account and the ability to freeze/unfreeze)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167994785-88d14878-267f-4967-9495-350ba5ddb438.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account search after searching &#39;20&#39;. Clicking on an account number will lead to<br>the transactions page where the admin can freeze/unfreeze.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/85">https://github.com/rjm8/IT202-008/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/admin/find_users.php">https://rjm8-prod.herokuapp.com/Project/admin/find_users.php</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code logic for the different views and admin actions</td></tr>
<tr><td> <em>Response:</em> <p>Find User: <br>Query to find profile information from the Users table where first_name<br>= input first name and last_name = input last name<br>Find account:<br>Query to find<br>account_number and frozen from Accoutns table where account_number like % input %<br>Freeze account:<br>Update<br>Accounts set frozen = (opposite of current status) where account_number = session_viewing_account_number<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167995363-50964c0a-4195-4bb1-9ead-3295bc116e97.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proposal file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/167995482-31b73dc7-e662-45ef-ad86-b99825685c83.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>All issues closed on Project Board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-4-bank-project/grade/rjm8" target="_blank">Grading</a></td></tr></table>
