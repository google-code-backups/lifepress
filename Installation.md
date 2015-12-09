These instructions are mostly temporary, we're hoping to have a nice easy install script that does all kinds of checks for you included in Lifepress as soon as possible.

### Step 0 - Pre-Installation ###

Make sure your web server has the following pieces of software installed

  * MySQL
  * PHP
  * mod\_rewrite or equivalent

Create a database and name it whatever you'd like and copy the Lifepress files into a directory of your choosing.

### Step 1 - URL Rewriting ###

#### Step 1a - Apache ####

Add the following lines to the .htaccess file in the directory you installed Lifepress to

```
Options +FollowSymLinks
<IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteBase /path/to/lifepress
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php?/$1 [L]
</IfModule>
```

#### Step 1b - LightTPD ####

(I'm not super knowledgable with LightTPD, contributor please?)

### Step 2 - Edit configuration ###

You're going to need to take a look at two files config.php and database.php. They're both contained in system/application/config/.

First, take a look at config.php

```
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://www.your-site.com/
|
*/
$config['base_url']	= "http://www.your-site.com/";
```

Pretty self-explanitory but don't forget that if you install Lifepress in a subdirectory of your web root that you need to include that here.

Now lets look at database.php

```
$db['default']['hostname'] = "localhost";
$db['default']['username'] = "user0";
$db['default']['password'] = "******";
$db['default']['database'] = "lifepress";
```

There are a bunch more options but we don't need to worry about them, these are the important ones.

In the quotes after ['username'] type the username you use to connect to your MySQL database. Type the password after ['password'] and the name of the database you created in Step 0 after ['database'].

### Step 3 - Installation ###

You're almost there!

Now, point your web browser to the address you installed Lifepress to and follow the on screen instructions.

You're done!