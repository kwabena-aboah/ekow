login email: admin@admin.com, password: admin1234
login email: user@user.com, password: user1234

1. copy the folder into the directory apache2/htdocs/ folder of your server software. e.g xamp
2. start your server and make sure both apache and mysql are both running
3. open your browser and type localhost/phpmyadmin. Login with your credentials and create a database called 'ekow'
4. go to import command at the top. click on select button and select the ekow.sql file in the folder to import.
5. now go back into your ekow folder and edit the following files in db.inc folder 'connect.php' and 'config.php'

6. connect.php:
replace DB_USERNAME and DB_PASSWORD with your login credentials for phpmyadmin

7. config.php:
replace private $user and private $pass with your login credentials for phpmyadmin


8. Now go back to your browser and type 'localhost/ekow'
9. enter any of the login email and password above to login or you can register a new user and login.
