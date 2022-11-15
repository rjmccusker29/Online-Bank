<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Ryan McCusker(rjm8)</td></tr>
<tr><td> <em>Generated: </em> 4/19/2022 10:57:19 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-bank-project/grade/rjm8" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164131214-382b5388-7935-4a98-8a5d-c853ffd98c90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table displays the system user with an id of -1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164131371-e3f3d509-e7f1-4b1a-a642-e203997b3de1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts table displays the world account with id -1, user_id -1, and account_number<br>&quot;000000000000&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>When an account deposits or withdraws money, that money has to come from<br>and go to somewhere. That place is the world account. An account cannot<br>be made without a corresponding user because of the foreign key, so the<br>system user is created. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/52">https://github.com/rjm8/IT202-008/pull/52</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/53">https://github.com/rjm8/IT202-008/pull/53</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/54">https://github.com/rjm8/IT202-008/pull/54</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td> <em>Response:</em> <p><img src="https://user-images.githubusercontent.com/98109031/164131961-9e9d4acd-e45a-482e-896b-49013c0ea658.png" alt="image"><br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>All links except Transfer are working. Create Account is also limited in that<br>only a checking account (account type 1) can be created. My Accounts, Deposit,<br>Withdraw, and My Profile work properly.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/55">https://github.com/rjm8/IT202-008/pull/55</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164132287-3f371395-9cce-463c-ac23-6356953a9e7c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The create account page allows the user to create a checking account with<br>an initial deposit.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164132441-d7ddc331-2f55-4109-82c6-05d276ae4423.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User is given an error when the initial deposit is under $5. The<br>account is not created.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164134167-ebb1fb85-b003-4974-8eb7-f9730675be63.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User receives a message that their account is created. They are redirected to<br>the accounts page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="![image](https://user-images.githubusercontent.com/98109031/164132762-eeca4fc6-2717-499d-9ea5-868df2bd1d3f.png)">![image](https://user-images.githubusercontent.com/98109031/164132762-eeca4fc6-2717-499d-9ea5-868df2bd1d3f.png)</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>To generate new account numbers, I kept the last digits of the account<br>number the same as the user id, and the rest of the digits<br>are 0s. If that name was taken, I incremented the first digit until<br>there exists an untaken number. For example, for user id 7 I would<br>check 100000000007, then 200000000007. After 900000000007 comes 100000000007 (must be taken) then 110000000007,<br>120000000007, etc.</p><br><p>To do transactions, I would set the session account data to the<br>account doing the transaction. I would then make a query with the account<br>info from the session, the account info of world, and the user generated<br>info such as amount and memo. Expected total was found by adding the<br>transaction amount to the current balance of the account in the accounts table.<br>After making the Transactions queries, I update the Accounts balance by summing the<br>transactions of the account on the session and the world account. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/56">https://github.com/rjm8/IT202-008/pull/56</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/create_account.php">https://rjm8-prod.herokuapp.com/Project/create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164134167-ebb1fb85-b003-4974-8eb7-f9730675be63.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User can see each of their accounts. They can also select an account<br>to view its transaction history. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>An html table is created with various columns of account data. In the<br>table, a query selects all the accounts matching the user id of the<br>current session and list their data in the table. There is also a<br>form in the last column of each row allowing the user to select<br>a specific account to redirect them to the transactions page. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/57">https://github.com/rjm8/IT202-008/pull/57</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/accounts.php">https://rjm8-prod.herokuapp.com/Project/accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history (should have at least a few samples) Show account number/type, balance, opened date and transaction details</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164135114-86fb3281-a4b4-43ed-9afd-12440f5179ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The transaction history contains the transaction from the account perspective and world perspective.<br>It also lists account information at the top. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>When an account is selected on the accounts page, that account&#39;s information is<br>stored to the session. The transaction page contains a table, each column being<br>an aspect of a transaction. During table creation, a query is made to<br>select all transactions that include the account id as the source or destination.<br>Each transaction is displayed in a row of the table. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/58">https://github.com/rjm8/IT202-008/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/transactions.php">https://rjm8-prod.herokuapp.com/Project/transactions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164135650-557893fe-be38-43ac-9f53-24945e786fdf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User can select an account from a drop down menu, select an amount<br>to deposit, and write a reason (memo) for depositing.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164135820-6a592bfd-2876-4a52-9ec3-bcb472d5eb11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Withdraw page is the same as deposit page except user is withdrawing money<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164136021-0c3bb631-a4eb-4eb5-aabe-3e063ec17292.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User receives a message saying that they must withdraw (or deposit) at least<br>1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164136137-5b78a96d-3c49-457b-9b86-13ccdd137cb8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User receives a message saying they cannot withdraw more than their account contains<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164136359-f842e60c-5dd9-4089-a168-9cd7fa1fff2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful withdrawal<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164136515-249a1d13-85a5-4870-9873-7e7de4c2e327.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful deposit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests (should have accurate expected_total values)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164138795-dba14cbd-a671-424f-8c9f-d0e424a26e31.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Below the red line, an account is created with an initial deposit, makes<br>another deposit, and makes a withdrawal. All values are as expected. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>The account making the transaction is assigned to the session. A function is<br>called with parameters containing the two accounts (session account and world), along with<br>other data about the transaction such as amount and memo. The function finds<br>expected balance by making a query to select the balance from Accounts where<br>the account number matches each account from the parameters. The function then calls<br>a query to make a transaction where each value in the transaction is<br>defined by parameters, then calls the inverse of that function. The balance in<br>Accounts are then updated by summing the transactions with account number from the<br>session and world accounts. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rjm8/IT202-008/pull/59">https://github.com/rjm8/IT202-008/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/withdraw.php">https://rjm8-prod.herokuapp.com/Project/withdraw.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rjm8-prod.herokuapp.com/Project/deposit.php">https://rjm8-prod.herokuapp.com/Project/deposit.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164141124-154927a6-2885-4f95-ae3c-8cd1a9257713.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated proposal.md file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98109031/164141231-840e0163-25d5-42f8-8f7e-be4a1115e790.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board containing completed issues<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-2-bank-project/grade/rjm8" target="_blank">Grading</a></td></tr></table>
