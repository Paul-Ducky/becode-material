# Title: Create, Read, Update, Delete

- Repository: `php-crud`
- Type of Challenge: `Learning Challenge`
- Duration: `5 days`
- Deployment strategy : `NA`
- Team challenge : `team of 3-4`

## Learning objectives
- To be able to connect to a database
- To be able to write a simple Create, Read, Update & Delete (CRUD) application
- Use a provided [MVC structure](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) to work into.
- Learn to work with different export formats (CSV / XML)
- Explore the "like" mysql operator

## The Mission
You will create a CRUD system to store student, teacher and class information in the database.

You will use the [MVC structure](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) provided in the [PHP MVC Boilerplate](https://github.com/becodeorg/php-mvc-boilerplate) repo provided by your coach, to help you on your way!

You can find more info about mvc in the [attached file](mvc.md).

In this assigment you will end up with at least 3 models and 3 controllers, but you could end up with more. Model the software how you want it!

### What is CRUD?
When we are building web applications, we want our models to provide four basic types of functionality. Most models will have to be able to Create, Read, Update, and Delete. This is often abbreviated as CRUD.

While is an old style of approaching applications, with new ways of thinking (Domain Driven Design, Event Driven Design) that are more flow based - CRUD is still a large portion of all the programs developed today.

## Must-have features
**Your are required to use at LEAST 9 classes in this exercise (Student, Teacher, Class, StudentLoader, TeacherLoader, ClassLoader, StudentController, TeacherController, ClassController).**

You are encouraged to use more classes. The smaller and specialised a class the better!

### Step 1
You have to provide the following pages for Students, Teacher & Class.

- A general overview of all records of that entity in a table
    * Each row should have a button to edit or delete the entity
    * This page should have a "create new" button
- A detailed overview of the selected entity
    * This should include a button to delete this entity
    * Edge case: A teacher cannot be removed if he is still assigned to a class
    * Edge case: If you remove a class, make sure to remove the link between the students and the class.
- A page to edit an existing entity
- A page to create a new entity

### Fields:
On the general overview table you can yourself decide what would be useful information to show.

On the detailed overview you have to provide the following information:

#### Student
- Name
- Email
- Class (with a clickable link)
- Assigned teacher (clickable link - relation via class)

#### Teacher
- Name
- Email
- List of all students currently assigned to him (clickable link)
 
#### Class 
- Name class (Giertz, Lamarr, ...)
- Location (Antwerp, Gent, Brussels, Liege, Charleroi)
- Assigned teacher (clickable link)
- List of assigned students (clickable link)

### Step 3: Export button
At the overview page of each entity add a button to export the data in the table to [CSV format](https://www.php.net/manual/en/function.fputcsv.php).
Don't show foreign key ids in the table, instead show the full name of the linked entity. For example an export class should contain the full name of the teacher.

### Step 4: Search field
Add a search bar at the top of each page to search for the names of teachers or student. You might want to use the [like](https://www.mysqltutorial.org/mysql-like/) operator for this. Display all matches sorted alphabetically, teachers and students mixed.

### Step 5 (only required if you have 4 people in your team)
Now we have all the available forms to CRUD the different entities in our system, we want to limit who can see and read all the data in the system.
Only the school administrators should have access to all this data, so let us put the entire system behind a login form.

#### 5.1 Added a user entity
Add a `user` table to your application with the following fields:
- id (PK)
- Email
- Password
    
#### 5.2 Registration form
Create a form where you can create a new User, just like you did for the other entities.

The registration logic should:
- Check if the email is valid (validate all other fields as well if necessary)
- Check if password and password confirm are equal.
- Hash the password and add it to the database in it's hashed form (**NEVER** store unhashed / unencrypted passwords). Use [password_hash()](http://php.net/password_hash) for this.
- If the registration fails, go back to the previous form, fill in all the previously filled in data (except the passwords) and show an error on the correct field.
- If the registration succeeds, go to the login form.
    
#### 5.3 Login form
Create a form that accepts a username and a password.

The login logic should:
- Check if the filled in email can be found on a user with that credential
- Check if the hashed database password, can be matched to the newly hashed (filled in) password. Use [password_verify()](http://php.net/password_verify) for this.
- If not, go back to the login page, giving an error (**WATCH OUT:** never say whether the password or the email was incorrect, always say either one of them could be wrong) 
- If it's correct, set a SESSION variable with go to the class overview page.

#### 5.4 Hiding the other pages behind the login screen
Now check for the existence of this SESSION variable on all the other pages that you create before.
If the session variable is not set, redirect to the login screen.

The only pages available without this session variable should be the registration and login form.

#### 5.5 Logout
When you click this link, destroy the session.
    
## Nice to have features
- Make a user automatically login after registration.
- Also add a button to export to XML.
- Make an address entity. An address can be assigned to a student or teacher (where he lives) or to a class (where are the lessons given).
- (Very difficult !) Add a password forget feature.

### Tips
- You will see that the Teacher and Student entity are really similar - maybe you can use `Extend` here as an OOP technique?
- Create and Update are very similar in how they behave, with some smart coding techniques you could use almost the same code for both pages.
- To do the search page and mix students and teachers you could use the [union operator](https://dev.mysql.com/doc/refman/8.0/en/union.html) in MySQL.
- If you want a shared database with all team members you can get a [free small database online](https://www.freemysqlhosting.net/). Be careful with this approach, this means that if anybody makes a mistakes and deletes all data/structure it will be gone for everybody.
- If you want to share local databases you can use the command `mysqldump` to create backups of your databases. Then commit the resulting .sql file to your repo. Other team members can now import this file.