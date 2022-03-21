## To run this project

You will need php, mysql, git and laravel installed.
First of all, clone the repository. On command line:
```
git clone https://github.com/lu1zf/notify-website-subscribers
```
After that, open the folder:
```
cd notify-website-subscribers
```
In the root folder, create a copy of .env.example and rename it to .env.
Inside the .env file, insert the following corresponding parameters:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=(YOUR DATABASE NAME HERE)
DB_USERNAME=(YOUR MYSQL USERNAME HERE)
DB_PASSWORD=(YOUR MYSQL PASSWORD HERE)

```
We also need to change the mail variables inside the .env file:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=(YOUR EMAIL HERE)
MAIL_PASSWORD=(YOUR EMAIL PASSWORD HERE)
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=noreply@apptest.com
MAIL_FROM_NAME="${APP_NAME}"
```
This email will be used to send the laravel mail notifications for new posts.

To run the database migrations, in the console at the notify-website-subscribers folder, do:

```
php artisan migrate
```

Before populating the database, modify the file UsersTableSeeder.php and replace my email (luizsilva.ee@gmail.com) with yours, the save the file.

To populate the database, do:
```
php artisan db:seed
```
Now, you will be able to run the application:
```
php artisan serve
```
You can create a new post using the endpoint:
```
http://127.0.0.1:8000/api/website/{websiteId}
```
Using the POST method and passing in the body the title and description of the post.

To register a new user in the website notification, you can use this POST endpoint:

```
http://127.0.0.1:8000/api/{websiteId}/{userId}
```
After that, the user will be notified when new posts were created.


