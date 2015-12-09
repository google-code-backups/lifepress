# Introduction #

CodeIgniter supports multiple languages for applications, based on the [Language Class](http://www.codeignitor.com/user_guide/libraries/language.html) and Lifepress should use this mechanism to support multiple languages.


# Details #

CodeIgniter will look first in the `system/application/language` directory. Language files must be named with _lang.php as the file extension. For example, let's say you want to create a file containing error messages. You might name it: error\_lang.php_

## Creating language files ##
Within the file you will assign each line of text to an array called $lang with this prototype:

```
$lang['language_key'] = "The actual message to be shown";
```

**Note:** It's a good practice to use a common prefix for all messages in a given file to avoid collisions with similarly named items in other files. For example, if you are creating error messages you might prefix them with error

```
$lang['error_email_missing'] = "You must submit an email address";
$lang['error_url_missing'] = "You must submit a URL";
$lang['error_username_missing'] = "You must submit a username";
```

## Loading files ##
In order to fetch a line from a particular file you must load the file first. Loading a language file is done with the following code:

```
$this->lang->load('filename');
```

## Fetching text ##
Once your desired language file is loaded you can access any line of text using this function:

```
$this->lang->line('language_key');
```

## What needs to be done ##

  * Add a general language file for all commonly used phrases and words for pure lifepress
  * Add i18n to the basic theme **sandbox**