# Project Name: Simple Bank
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: https://github.com/np649/IT209-009-V2/projects
## Website Link: (Heroku Prod of Project folder)
## Your Name: Neal Patel

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 3


<table>
<tr><td>milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - User will be able to transfer between their accounts ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/transaction.php?type=transfer](https://np649-prod.herokuapp.com/Project/transaction.php?type=transfer)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/35](https://github.com/np649/IT209-009-V2/pull/35)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Form should include a dropdown first AccountSrc and a dropdown for AccountDest (only accounts the user owns; no world account) Form should include a field for a positive numeric value System shouldn’t allow the user to transfer more funds than what’s available in AccountSrc Form should allow the user to record a memo for the transaction</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Each transaction is recorded as a transaction pair in the Transaction table These will reflect in the transaction history page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/146119160-da316613-3006-4393-9e87-dd4e98dd5a32.png">
<p>the page has a dropdown for the accounts you own
it lets you enter a positive number that is above your balance 
it lets you enter a memo</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/146118957-ce3e9ef2-114c-4356-9870-7dd588836564.png">
<p>the transfers are shown as a pair 
it gets recorded to the transactions table 
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Transaction History page ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/transaction_history.php](https://np649-prod.herokuapp.com/Project/transaction_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/38](https://github.com/np649/IT209-009-V2/pull/38)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Will show the latest 10 transactions by default User will be able to filter transactions between two dates User will be able to filter transactions by type (deposit, withdraw, transfer) Transactions should paginate results after the initial 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/146119561-d9f2c25a-134c-4ce8-94a8-556293422ede.png">
<p>this shows the transaction table, it is missing the pagination.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User’s profile page should record/show First and Last name ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/home.php](https://np649-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/35](https://github.com/np649/IT209-009-V2/pull/35)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - User’s profile page should record/show First and Last name</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/146119724-123c10d4-6956-4656-8766-9df4e4ce4556.png">
<p>the profile page shows the user their full name
the account creations asks for the user to enter their name now </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - User will be able to transfer funds to another user’s account ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/transfers_funds.php](https://np649-prod.herokuapp.com/Project/transfers_funds.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/37](https://github.com/np649/IT209-009-V2/pull/37)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Form should include a dropdown of the current user’s accounts (as AccountSrc) Form should include a field for the destination user’s last name Form should include a field for the last 4 digits of the destination user’s account number (to lookup AccountDest) Form should include a field for a positive numerical value Form should allow the user to record a memo for the transaction System shouldn’t let the user transfer more than the balance of their account</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/146120574-976bd15b-e47c-4cab-a569-9346c70e78a9.png">
<p>there is a dropdown with all of the accounts that you own
the form has a field for the user to input the recipient account and name
there is an input for money h</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - System will lookup appropriate account based on destination user’s last name and the last 4 digits of the account number Show appropriate user-friendly error messages Show user-friendly success messages Transaction will be recorded with the type as “ext-transfer” Each transaction is recorded as a transaction pair in the Transaction table These will reflect in the transaction history page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/146120637-7111c896-5fd7-4c65-be6f-3702b76f3183.png">
<p>the actual transfer between two accounts does not work, there are errors that keep popping up. </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>




### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
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
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
        
