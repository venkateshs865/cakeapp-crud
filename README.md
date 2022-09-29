# cakeapp-crud
Created crud application with user authentication in cakephp 4

![1](https://user-images.githubusercontent.com/75470740/192968056-3239efb2-798f-4d2b-a4d7-2d7ab43153b9.png)

Registration Page :
Here is registration page where user register with their Name, Email and password

![2](https://user-images.githubusercontent.com/75470740/192968415-da676d2e-13cd-4711-891d-4f4c500de75e.png)

Login Page :
In this page user login with already registered credentials 

![3](https://user-images.githubusercontent.com/75470740/192968889-ad2e9598-c174-46df-8209-d34958056968.png)

Index page :
In this page user add,view,update and delete all user details. Using logout button user logout from the page and redirect to login page

![4](https://user-images.githubusercontent.com/75470740/192969213-5af28266-047b-49ce-b06a-3857d94c7171.png)

Add Page :
In this page user can add their details and save it

![5](https://user-images.githubusercontent.com/75470740/192969512-012ee01f-667d-45f6-a039-6c8d34311767.png)

Edit Page :
In this page user can update their details and also set status for every user if user is set as active it was shown in index page and if it was changed to Inactive it doesn't shown in index page.


Installing CakePHP

Before starting you should make sure that your PHP version is up to date:
Open cmd and type below command
php -v
You should have PHP 7.4 (CLI) or higher. 

After that download Composer and install it. 

To create a CAKEPHP project

=>Type this command on command prompt in the path of xampp/htdocs:
composer create-project --prefer-dist cakephp/app:~4.0 app

Connecting our project 

=> Download our project as zip on your local and extract it. 
=> Inside our project folder just copy all stuffs.
=> Then open newly created cakephp folder and paste it then give keep files and replace.

=> Then open folder bin from our application and run this command,
bin/cake server
=> It generates host and copy that host and paste it on browser.

To connect with MYSQL

=> Create database named as my_app and then import our my_app.sql file and run it 
