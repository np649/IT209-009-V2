# Project Name: Simple Bank
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: https://github.com/np649/IT209-009-V2/projects
## Website Link: (Heroku Prod of Project folder)
## Your Name: Neal Patel
## Project video: https://mediaspace.njit.edu/media/IT202%20demo%20Neal%20Patel/1_41071sjb 
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


<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/profile.php](https://np649-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/59](https://github.com/np649/IT209-009-V2/pull/59)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - If public, hide email address from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147029987-df3a541d-fc51-4f45-a88c-e9edda6f44d1.png">
<p>screen showing the profile page where you can alter the public/private setting of the user</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147030139-8e021c04-c1be-4516-b71d-4ec79fd55f55.png">
<p>showing the database with the privacy setting</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able open a savings account ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/create_account.php](https://np649-prod.herokuapp.com/Project/create_account.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/60](https://github.com/np649/IT209-009-V2/pull/60)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - System will generate a 12 digit/character account number per the existing rules (see Checking Account above) System will associate the account to the user Account type will be set as savings Will require a minimum deposit of $5 (from the world account) Entry will be recorded in the Transaction table in a transaction pair (per notes below) Account Balance will be updated based on SUM of BalanceChange of AccountSrc System sets an APY that’ll be used to calculate monthly interest based on the balance of the account</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147030807-0d07e6cd-a437-4b7c-a22e-98d85d33c705.png">
<p>showing savings account creation </p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147030862-abed0d3b-7236-4896-a30e-78fb53f3004a.png">
<p>showing successful account creation with APY </p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147030955-58e96b22-4b69-4ee9-af09-0fa303232645.png">
<p>savings account in database with apy</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User will be able to take out a loan ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/create_loan.php](https://np649-prod.herokuapp.com/Project/create_loan.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/61](https://github.com/np649/IT209-009-V2/pull/61)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - System will generate a 12 digit/character account number per the existing rules (see Checking Account above) Account type will be set as loan Will require a minimum value of $500 System will show an APY (before the user submits the form)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147031642-dead5da5-064a-4405-96a4-ced01bdcc585.png">
<p>creating a loan menu. 500$ minimum, shows the APY you want. shows the accounts you are sending/receiving from. 
</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147031711-842201cc-9790-4cae-b528-5c68463d14b9.png">
<p>successful loan creation as a 12 digit random account. set as a loan. shows set APY. shows balance with the APY added on. </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - User will transfer funds to the loan account to pay it off,</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147032095-a1f7adea-53ba-489b-8d91-16a608814413.png">
<p>showing the transfer screen paying off a loan. see that there is interest on it. </p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147032096-afc2fc55-febe-42ad-8589-8fc00387a74e.png">
<p>showing paid off loan. it is able to be deleted now.</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147032415-54e41ce5-bb3b-4361-97a4-061721b0acfa.png">
<p>transaction table showing loan pay offs
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Listing accounts and/or viewing Account Details should show any applicable APY ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/accounts.php](https://np649-prod.herokuapp.com/Project/accounts.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/60](https://github.com/np649/IT209-009-V2/pull/60)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - if none is set for the particular account (may alternatively just hide the display for these types)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147032096-afc2fc55-febe-42ad-8589-8fc00387a74e.png">
<p>showing the APY under account with it. those with out an APY display 0%</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - User will be able to close an account ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/close_account.php](https://np649-prod.herokuapp.com/Project/close_account.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/62](https://github.com/np649/IT209-009-V2/pull/62)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - User must transfer or withdraw all funds out of the account before doing so</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147033478-1e8e36df-82c5-4e8b-beb3-cf8dbfa4f964.png">
<p>error message that pops up when you delete an account with a balance </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F5 - Account should have a column “active” that will get set as false.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147033688-4c7feee0-5ada-4810-ae8f-e8033f440720.png">
<p>the accounts table showing the active column. 1 for active, 0 for inactive. </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F5 - Closed accounts don’t show up anymore</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/65683440/147033536-ba49a37a-019e-4f5b-83b1-cef1b38372af.png">
<p>accounts page with the deleted account gone</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Admin role ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://np649-prod.herokuapp.com/Project/home.php](https://np649-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/np649/IT209-009-V2/pull/63](https://github.com/np649/IT209-009-V2/pull/63)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - I was unable to complete the admin feature since I ran out of time for the project</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
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
        
