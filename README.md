# DesignMyShirt
### Shirt Design Marketplace and Competitions

#### Getting Started 
---
To get started with contributing to DesignMyShirt, you must make that you have the following on your system :

1.  Web Server (Recommended: Apache)
1.  MySQL Server   

The following bundles are tested and known to work:

1. XAMPP (v.x.x) - Apache Server, MySQL Server
1. EasyPHP (v.x.x) - Apache Server, MySQL Server


**Installing/Cloning Rep**
Clone the repository on your local development system:

1. If you use *XAMPP*    
	 `cd /path/to/htdocs`  
	 `git clone https://github.com/LJAwesomeXD/DesignMyShirt.git`
1. If you use *EasyPHP*  
	`cd /path/to/eds-www`  
	`git clone https://github.com/LJAwesomeXD/DesignMyShirt.git`  

**Initializing Database Schema (using phpmyadmin)**
From the application directory, import schema.sql in the root foolder using phpmyadmin. If you use other database manage/viewer, the same instruction follows.

Steps:
1. Go to phpMyAdmin and create a new database 'DesignMyShirtDB'
1. Go back to the phpMyAdmin homepage and create a new user username 'Dev' and password '0' (This is for development only, we will change this in production phase, obviously)
1. 
