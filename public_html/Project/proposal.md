# Project Name: Simple Bank

## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.

## Github Link: https://github.com/rjm8/IT202-008/tree/prod

## Project Board Link: https://github.com/rjm8/IT202-008/projects/1

## Website Link: https://rjm8-prod.herokuapp.com/Project

## Your Name: Ryan McCusker

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION -->

### Proposal Checklist and Evidence

rjm8 04/03/2022

- Milestone 1
  - [x] \(02/22/2022) User will be able to register a new account
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/register.php](https://rjm8-prod.herokuapp.com/Project/register.php)
  - [x] \(02/24/2022) User will be able to login to their account (given they enter the correct credentials)
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/login.php](https://rjm8-prod.herokuapp.com/Project/login.php)
  - [x] \(02/24/2022) User will be able to logout
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/logout.php](https://rjm8-prod.herokuapp.com/Project/logout.php)
  - [x] \(03/03/2022 of completion) Basic security rules implemented
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/home.php](https://rjm8-prod.herokuapp.com/Project/home.php)
  - [x] \(03/29/2022 of completion) Basic Roles implemented
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/admin/create_role.php](https://rjm8-prod.herokuapp.com/Project/admin/create_role.php)
  - [x] \(04/03/2022 of completion) Site should have basic styles/theme applied; everything should be styled
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/register.php](https://rjm8-prod.herokuapp.com/Project/register.php)
    - [https://rjm8-prod.herokuapp.com/Project/styles.css](https://rjm8-prod.herokuapp.com/Project/styles.css)
  - [x] \(03/01/2022 of completion) Any output messages/errors should be “user friendly”
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/logout.php](https://rjm8-prod.herokuapp.com/Project/logout.php)
  - [x] \(03/03/2022 of completion) User will be able to see their profile
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/profile.php](https://rjm8-prod.herokuapp.com/Project/profile.php)
  - [x] \(03/03/2022 of completion) User will be able to edit their profile
    - [Milestone 1](https://github.com/rjm8/IT202-008/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://rjm8-prod.herokuapp.com/Project/profile.php](https://rjm8-prod.herokuapp.com/Project/profile.php)
- Milestone 2
  - [x] \(04/18/2022) Create the Accounts table (id, account_number [unique, always 12 characters], user_id, balance (default 0), account_type, created, modified)
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/accounts.php](https://rjm8-prod.herokuapp.com/Project/accounts.php)
  - [x] \(04/18/2022) Project setup steps
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/transactions.php](https://rjm8-prod.herokuapp.com/Project/transactions.php)
  - [x] \(04/18/2022) Create the Transactions table (see reference at end of document)
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/transactions.php](https://rjm8-prod.herokuapp.com/Project/transactions.php)
  - [x] \(04/18/2022) Dashboard page
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/home.php](https://rjm8-prod.herokuapp.com/Project/home.php)
  - [x] \(04/18/2022) User will be able to create a checking account
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/create_account.php](https://rjm8-prod.herokuapp.com/Project/create_account.php)
  - [x] \(04/18/2022) User will be able to list their accounts
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/accounts.php](https://rjm8-prod.herokuapp.com/Project/accounts.php)
  - [x] \(04/19/2022) User will be able to click an account for more information (a.k.a Transaction History page)
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/transactions.php](https://rjm8-prod.herokuapp.com/Project/transactions.php)
  - [x] \(04/19/2022) User will be able to deposit/withdraw from their account(s)
    - [Milestone 2](https://github.com/rjm8/IT202-008/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://rjm8-prod.herokuapp.com/Project/deposit.php](https://rjm8-prod.herokuapp.com/Project/deposit.php)
    - [https://rjm8-prod.herokuapp.com/Project/withdraw.php](https://rjm8-prod.herokuapp.com/Project/withdraw.php)
- Milestone 3
  - [x] \(04/21/2022) User will be able to transfer between their accounts
    - [Milestone 3](https://github.com/rjm8/IT202-008/blob/Milestone3/public_html/Project/milestone3.md)
    - [https://rjm8-prod.herokuapp.com/Project/transfer_to_same_user.php](https://rjm8-prod.herokuapp.com/Project/transfer_to_same_user.php)
  - [x] \(05/02/2022) Transaction History page
    - [Milestone 3](https://github.com/rjm8/IT202-008/blob/Milestone3/public_html/Project/milestone3.md)
    - [https://rjm8-prod.herokuapp.com/Project/transactions.php](https://rjm8-prod.herokuapp.com/Project/transactions.php)
  - [x] \(04/28/2022) User’s profile page should record/show First and Last name
    - [Milestone 3](https://github.com/rjm8/IT202-008/blob/Milestone3/public_html/Project/milestone3.md)
    - [https://rjm8-prod.herokuapp.com/Project/profile.php](https://rjm8-prod.herokuapp.com/Project/profile.php)
  - [x] \(04/28/2022) User will be able to transfer funds to another user’s account
    - [Milestone 3](https://github.com/rjm8/IT202-008/blob/Milestone3/public_html/Project/milestone3.md)
    - [https://rjm8-prod.herokuapp.com/Project/transfer_to_another_user.php](https://rjm8-prod.herokuapp.com/Project/transfer_to_another_user.php)
- Milestone 4
  - [x] \(05/11/2022) User can set their profile to be public or private (will need another column in Users table)
    - [Milestone 4](https://github.com/rjm8/IT202-008/blob/Milestone4/public_html/Project/milestone4.md)
    - [https://rjm8-prod.herokuapp.com/Project/profile.php](https://rjm8-prod.herokuapp.com/Project/profile.php)
  - [x] \(05/03/2022) User will be able open a savings account
    - [Milestone 4](https://github.com/rjm8/IT202-008/blob/Milestone4/public_html/Project/milestone4.md)
    - [https://rjm8-prod.herokuapp.com/Project/create_savings_account.php](https://rjm8-prod.herokuapp.com/Project/create_savings_account.php)
  - [x] \(05/06/2022) User will be able to take out a loan
    - [Milestone 4](https://github.com/rjm8/IT202-008/blob/Milestone4/public_html/Project/milestone4.md)
    - [https://rjm8-prod.herokuapp.com/Project/loan.php](https://rjm8-prod.herokuapp.com/Project/loan.php)
  - [x] \(05/06/2022) Listing accounts and/or viewing Account Details should show any applicable APY or “-” if none is set for the particular account
    - [Milestone 4](https://github.com/rjm8/IT202-008/blob/Milestone4/public_html/Project/milestone4.md)
    - [https://rjm8-prod.herokuapp.com/Project/accounts.php](https://rjm8-prod.herokuapp.com/Project/accounts.php)
  - [x] \(05/06/2022) User will be able to close an account
    - [Milestone 4](https://github.com/rjm8/IT202-008/blob/Milestone4/public_html/Project/milestone4.md)
    - [https://rjm8-prod.herokuapp.com/Project/transactions.php](https://rjm8-prod.herokuapp.com/Project/transactions.php)
  - [x] \(05/11/2022) Admin role (leave this section for last)
    - [Milestone 4](https://github.com/rjm8/IT202-008/blob/Milestone4/public_html/Project/milestone4.md)
    - [https://rjm8-prod.herokuapp.com/Project/find_accounts.php](https://rjm8-prod.herokuapp.com/Project/find_accounts.php)

### Intructions

#### Don't delete this

1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
7. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
8. Add, commit, push the related file changes to this branch
9. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
   - Screenshot(s) of the site view (make sure they clearly show the feature)
   - Screenshot of the database data if applicable
   - Describe each screenshot to specify exactly what's being shown
   - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
10. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)

    - Basically add an x to the checkbox markdown along with a date after
      - (i.e., - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel

11. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)

    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment

12. If the attached issues don't close wait until the next step
13. Merge the updated dev branch into your production branch via a pull request
14. Close any related issues that didn't auto close

    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board