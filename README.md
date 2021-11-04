> # Description 📋 

**"GO MY SQUAD"** is a Social Networking Site project just like the popular social networks like Facebook but we made this version with different idea using PHP and MySQL in backend
- The point of this project is to find a way for gamers to meet and find new team members from different countries.
In this Social Networking Site it includes features such as Login/sign up, Post Status, comments, before you could explore a social network site, you need to sign up first by filling up all the required information.
Once you are done signing up, you can now have the account to access the Social Networking Site.
In there, you will be able to post any status that you like, upload your photos and you can also write comments on the comment box.
You can also view the timeline, Its just like your favorite Facebook that you will surely love to explore.

------------


#### These are the following features of Social Networking Site in PHP/MySQLi
**- Registers User**
###### -In the section you can register your basic information -In the section you can register your basic information
**- Login User-**
###### In this section you can login your email and password
**- Home Page-**
###### In this section you can view all the status that are posted by your friends
**- Update Profile-**
###### In this section you can edit you personal information
**- Change Picture**
###### In this section you can change you profile picture
**- Posting Status**
###### In this section you can post your status
**- Comment in the Status**
###### In this section you can write comment on the status of your friends
**- Remove Status-**
###### In this section you can remove the status that you posted

------------


### How to setup the Social Networking Site in PHP/MySQLi
#### Step 1: install XAMPP
<p>Before you can install the XAMPP stack, you need to download the package from the <a href="https://www.apachefriends.org/index.html" target="_blank" rel="noreferrer noopener">official Apache Friends webpage</a>.</p>
https://phoenixnap.com/kb/wp-content/uploads/2021/04/download-xampp.png
 Now make the file executable by running a chmod command:
 
 `sudo chmod 755 [package_name]`
 
 `sudo chmod 755 xampp-linux-x64-7.3.5.1-installer.run`
 
 `ls –l xampp-linux-x64-7.3.5.1-installer.run`
 
 `sudo ./[package_name]`
 
 `sudo ./xampp-linux-x64-7.3.5.1-installer.run`

[![](https://phoenixnap.com/kb/wp-content/uploads/2021/04/launch-xampp-setup.png)](https://phoenixnap.com/kb/wp-content/uploads/2021/04/launch-xampp-setup.png)

Click Next and in the following Select Components dialogue, choose the components you want to install. We recommend keeping the default settings and continuing with Next.
> [![](https://phoenixnap.com/kb/wp-content/uploads/2021/04/manager-xampp-servers.png)](https://phoenixnap.com/kb/wp-content/uploads/2021/04/manager-xampp-servers.png)

#### Step 2: install source code
1. Clone our repo :

`git clone https://github.com/mahdixabid/Go_My_Squad`

`sudo mv Go_My_Squad /opt/lampp/htdocs/`

2  install database :
 - in your browser open this url  `http://localhost/phpmyadmin/`

- login with your default username & password (root,root)

- Add new database with name "Go_My_Squad"(if you want to change the database name you must change it before in the file \includes\database.php)

- Click import to import the sql file
- Click choose file and select the file that can be found inside\Go_My_Squad\db

- Click go.

#### Step 3 : Run the Project
- Open the browser and go to http://localhost/Go_My_Squad
- Create new account or login using Admin account (gomysquad@admin.com || admin)

#### To do list:

- Download the specified font along with website as it is accessed to ensure layout consistency
- Ability of sending friend request
- Supporting post likes
- Real time notifications for post likes and friend requests
- Using search engine instead
- ~~Full profile edit~~
- Using plugins to avoid redirection or refresh of pages when making requests
- Full protection of data from injections
