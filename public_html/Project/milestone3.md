<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Ryan McCusker(rjm8)</td></tr>
<tr><td> <em>Generated: </em> 5/1/2022 9:58:31 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/rjm8" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166172689-5cd9a57d-6e83-45df-b8a5-81c8f5935df1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transfer to same user page (there is another page for transferring to other<br>users)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166172750-b359ec76-48fa-4831-97d8-935ecdfa4b64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Source account drop down includes all accounts that belong to the logged in<br>user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166172838-3681ece1-ba47-441f-9a15-7dd4725414d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer more than the account balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166172865-887cf43d-7578-4d14-9e94-f202583e2246.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer to the same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166172962-5d557514-c3bb-4188-9096-63b23d3d9172.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer a negative amount <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173015-54f18fa3-930e-42a2-959d-f317eb27e534.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transactions table showing various transfers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173130-34b61040-be02-4b07-8943-3e5b614b811e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts table after transfers. All accounts have initial deposits, so it is impossible<br>to show accounts that have only had transfers.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>I made a query that selects account_number from the Accounts table where user_id<br>is equal to the user id from the session. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/68">https://github.com/rjm8/IT202-008/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/transfer_to_same_user.php">https://rjm8-prod.herokuapp.com/Project/transfer_to_same_user.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173329-f2436a76-d558-4bd1-aed1-0199b550a3ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transactions page showing multiple transfers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173329-f2436a76-d558-4bd1-aed1-0199b550a3ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The first page contains only 10 transactions<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173457-1ce71230-e54b-49ca-b47c-4e63904333fb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The second page contains a single transaction (there are 11 transactions total)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173618-7d880b99-41fb-4243-9ccd-e81b39460878.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filtered by date to show between 4/15 and 4/25<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173661-92f76696-efa3-4cc3-afce-6564a217b7db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filtered by type to only show deposits<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173696-f6262e44-9211-4b5c-baae-7acd37acb062.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filtered by type to only show withdrawals<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173722-c1f1480e-d092-4654-b5d6-9c780e721f6d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filtered by type to only show transfers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>Filters: There is a form that allows the user to pick start date,<br>end date, and transaction type. There is a query that selects from the<br>Transactions table where created (the timestamp when the transfer occurred) &gt;= the user<br>input start date, created &lt;= the user input end date, and transaction_type =<br>the user input transaction type. If nothing is inputted, start date will be<br>1900-01-01 00:00:00, end date will be 3000-01-01 00:00:00, and transaction type will be<br>&quot;%&quot;. User can input any combination of the options.</p><br><p>Pagination: <br>At the bottom of<br>the page is a series of links, &quot;first, prev, next, last&quot;, that set<br>the $page to 1, decrement $page, increment $page, and set the $page to<br>$page_count, respectively. They do this by altering the url (callable with GET). Default<br>$page is 1.</p><br><p>$offset is ($page -1)*10. A query is made to count the<br>all the transactions that will show up; this number divided by 10 (rounded<br>up) is the page count. In the query to call the transactions that<br>will be displayed, and a limit is set to only display 10, offset<br>by $offset.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/70">https://github.com/rjm8/IT202-008/pull/70</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/71">https://github.com/rjm8/IT202-008/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/transfers.php">https://rjm8-prod.herokuapp.com/Project/transfers.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166174724-e9787aba-2baf-47ba-bf49-43afefc5cdda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page now contains First Name and Last Name<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/69">https://github.com/rjm8/IT202-008/pull/69</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/profile.php">https://rjm8-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166174848-0d916e61-c00c-428d-a781-608dba3484a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page for transferring to another account. (Professor told me I could use the<br>first 4 digits of destination account number instead of last 4 digits because<br>of how I designed my account numbers)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166174962-f42b7d13-590c-4bb0-ae80-f0a6f78929ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer more than account balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166175004-0ced8ad3-ddc7-4cf9-822a-6c9741c1c32c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer a negative amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166175057-41577068-a5fc-480f-b9b9-34d25b5e379e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer to a last name that is not registered<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166175105-498dfeb5-d9d0-4e20-9ac7-b2e39b014d98.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error after attempting to transfer to an account number that is not owned<br>by the user with entered last name<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166175229-28fe24bc-28c5-4160-9bb8-51510318f412.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transactions table showing transfers to other users<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166173130-34b61040-be02-4b07-8943-3e5b614b811e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts table after transfers. All accounts have initial deposits, so it is impossible<br>to show accounts that have only had transfers.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>A form allows the user to input the users last name and the<br>first four digits of the account number. A query is made to find<br>the id from the Users table where last_name is equal to the user<br>inputted last name. A string is made containing the first 4 digits of<br>account number (user input) + &quot;%&quot; + id (from query). So, for example,<br>first four digits 1000, user id 7, final string would be &quot;1000%7&quot;. Another<br>query is made to search for an id from Accounts where account number<br>is like that string. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/69">https://github.com/rjm8/IT202-008/pull/69</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/transfer_to_another_user.php">https://rjm8-prod.herokuapp.com/Project/transfer_to_another_user.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166175610-dd6fb544-4956-468b-82de-d56d646708a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal.md updated for Milestone3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/166175670-21cc4772-224a-41e8-b146-02ff132c86bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board with all issues closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/rjm8" target="_blank">Grading</a></td></tr></table>
