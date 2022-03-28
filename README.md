# COMMENT API

 This project was for a Backend Engineer Technical Assessment project using Lumen PHP Framework.

# About
This custom API is to be used together with the IceFire API to enable the user to tag a comment along listed books. This API is built base on the Lumen PhP Microframework and has been tested using the Insomnia rest tool.


> The API has been deployed to the `HEROKU cloud platform`.  It's accessible through the link below :
> * [DEPLOYED](https://blooming-mesa-56911.herokuapp.com/api/v1/comments) - HEROKU INSTANCE USED

## Requirements

```
  1.The application should have basic documentation that lists available endpoints and methods along with their request and response signatures
  2.The exact API design in terms of the total number of endpoints and HTTP verbs is upto you
  3.Keep your application source code on a public repository
  4.Provide a Live demo URL, you could spin up a virtual server on AWS, Digital Ocean or Heroku instance
  5.Comments should be stored in a SQL database
  6.Comments should be retrieved along with public IP address of the commenter and the UTC date and time they were stored
  7.Comment length should be limited to 500 characters

```

## Running CommentAPI in Development
* Git clone this project.
* Download and install composer and PHP. 
* Install and configure the MYSQL Server
* Run `composer install` in your terminal to install required dependencies.
* Update the `.env` file to configure your environment variables, e.g. database host, username and password.
* Run `php -S localhost:8000 -t public` to start the development server.
* Open [http://localhost:8000](http://localhost:8000) to view the application in your browser.

