-----------------------------------------------------------------------------
Requirements for using software:
-----------------------------------------------------------------------------
Usage:
1. Install XAMPP from the sourceforge.net repository.
2. Move the "onlinestore" folder to htdocs folder in directory path:
	"C:/xampp/htdocs/"
3. Open a recent web browser type in the url address:
	"localhost/phpmyadmin"
4. Click the "Databases" tab on the near middle-left.
5. Create a database named:
	"mystore"
   and select:
	"Collation"
   from the combo box list and click the "Create" button after.
6. Then, Click the "mystore" database on the list of databases
   appearing on the corner left navigation.
7. Click the "Import" tab and click the "Browse" button
   to import an SQL file.
8. To find the sql file, go to this directory specifying:
	"C:/xampp/htdocs/onlinestore/mysqlfiles/"
   And select "mystore" SQL file to upload it.
9. Going back to the web browser, go down to the page and click
   "Go" button to upload the SQL file.
10. If prompt succession of uploading, you can now try to use the 
    web application.
11. To start, change the url address to:
	"localhost/onlinestore/"
    And click go and you will be taken to login page
12. Sample account's credentials is in the following:
    Username: Adam
    Password: poopoo
13. After click the "submit" button, you will then be taken to the
    user home page and you can start using it.

!!!!!!!!!!!!!!!!!!!!!!!!!!ADMIN_SIDE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
To go to admin side, change the url address to:
	"localhost/onlinestore/storeadmin"
you can also use the same account credentials as stated above.
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Thank you :D
----------------------------------------------------------------------
Note: this software can also be used in web hosting, you will only 
have to change the credentials of connect.php in the
folder of connect and config.php in the index directory with what
your server's same database credentials.
Do take precaution in some errors when the server's OS is GNU/Linux or
any other than Windows as the file system will be changed to every detail.
e.g. /root/, /public_/html/, etc.

For further usage of the software, refer to the GNU GPL in the file:
	"C:/xampp/htdocs/onlinestore/LICENSE.MD"
and open it in any text editor(notepad, notepad++, vim, emacs, etc.).
----------------------------------------------------------------------
Author: Daryl "Kedra" Casanova
----------------------------------------------------------------------