# Police
Platform for logging crimes for your FiveM RP server.

This is my remake of someone elses project.
Make sure to check out the [Original Owner](https://forum.fivem.net/u/davendrix)

## Installation Guide
- Download the ZIP folder
- Open the `config.php` file and change the following to connect to your database:
```
$username = "<your db username>"; // username
$password = "<your password>"; // password of the database
$hostname = "localhost"; // host of the database
$namebase = "police"; // name of the database
```
- Import the `databse.sql` file into your MySQL database
- Upload all the files to your webserver and then visit `http://yoursite.com/signup.php`to create an account
- Once you have created an account, delete the `signup.php` file
- You're done!

## Demo
A demo of this can be found [here](https://rootk1d.xyz/police)

Username: `test@test.com`
Password: `test`


## Features
- Add and Delete players from a criminal list
- Search by each heading
- List manhunts

## Feedback / Support
Feedback is great! If you have a suggestion or request, create an issue! Smilarly, if you have any issues, use the issue tab to let us know. If you do need any help with problems please visit the [Discord Server](https://discord.gg/QQaWvMkFbs)

## Todo
- Catalog of sanctions#
- Design home site
- More actions for manhunts / criminal records (edit, ...)

## Contributing
You can help develop this project by doing some things of the todolist and making a pull request. If you have some even better ideas on how this project can be improved you can also make a pull requrest.

