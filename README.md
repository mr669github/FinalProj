# FinalProj
Final Project For your final project, you need to create a todo task management application that does the following things:  1.  Users can create an account with the following fields: username, email address, first name, last name, password (Bcrypt) (http://php.net/manual/en/function.password-hash.php) and (http://www.gregboggs.com/php-blowfish-random-salted-passwords/)  2.  Make a login form that users can sign in to the application and create a session to store their username.  3.  Make a logout function/link that destroys the session  4.  Make a form to create to-do items with a foreign key of the user ID to link the todo items to the user  5.  Make a page listing of todo items for the user that signs in.    6.  Make a page that shows a todo item with an edit button and delete button  7.  When someone clicks the edit button display the todo item in the form.  There should be a save button on the form to save the updates.    8.  When someone clicks the delete button they should delete that todo item.  9.  There should be a user profile page that users can use to edit their name, email, and password  10.  You should validate all your fields before updating and saving:   User account fields:  First / Last Name: at least 1 character  Password: at least 6 characters  Email: valid email address  Todo Fields:  Todo Title/body: more than 1 character  Todo complete: Boolean 0/1  Todo: Date created - Displayed but not editable  Todo: date updated - displayed but not editable  Scoring:  60 Points for all functions working  10 Points Sign up with bcrypt 10 Points Login with brcrypt 5 Points logout 10 Points Listing Todo 10 Points update Todo 10 Points create todo 5 points delete todo 10 Points for Coding Style - Object Oriented programming or organized procedural that doesn't repeat and has functions that do one and only one operation i.e. your code should be clean and understandable with meaningful function names, variable names, and classes that group similar functions together  10 Points for having Git Commits over the course of 20 days and/or at least 20 commits over no less than 5  10 points for attempting to use at least two of the following: namespaces, autoloading, reflection, or interfaces  10 points for using MVC  Programs will be tested by signing up 2 users and testing all functionality.    Project should be turned in using a link to the git repo and a link to the working project on AFS.
