

## Laravel with Swagger

A prototype with few endpoints in order to show the use of Swagger to document API

## Points to improve

- Greater rigor in validations.
- Test creation.
- Greater detail in the documentation by Swagger. Only a few notations were used. There are a large number of details that can be added to the resource documentation.


## Minimum requirements
Laravel 10.x requires a minimum PHP version of 8.1.

## Project installation

Considering that git is already installed on your machine and using the terminal run the commands below:


`` $ git clone https://github.com/aroldosantos/Laravel_swagger.git ``

`` $ cd Laravel_swagger ``

You can also just download the zip and unzip it wherever you want.

In the ``Laravel_swagger`` folder, run the commands below:

`` $ composer install ``


Make a copy of the ``.env.example`` file and rename it to just ``.env``

Run the command:

`` $ php artisan key:generate ``

create a MySQL database.

Open the ``.env`` and look for the entries:


```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Replace entries with your settings

My settings looked something like this

```
DDB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_swagger
DB_USERNAME=root
DB_PASSWORD=
```
 
In the ``Laravel_swagger`` folder, run the commands below:

``$ php artisan migrate --seed``

This command will both create tables in the database and populate these tables with fake data.

Run the commands below:

`` php artisan l5-swagger:generate ``

This command generates Swagger documentation. It always needs to run when a change is made to the code.


Start the server with the command:

``$ php artisan serve``

A php server startup prompt will appear with something like:

`` INFO  Server running on [http://127.0.0.1:8000]. ``


## Generating a token
In an HTTP client like Postman, access the URL using the body to login.

- URL: ``http://127.0.0.1:8000/api/auth/login``
- User: (Any email from users table)
- Password: ``password``

### Body example
``{
    "email": "nathanael.kulas@example.com",
    "password": "password"
}``

## Listing users
- URL: ``http://127.0.0.1:8000/api/users``
- HTTP: GET

## Searching User by ID
- URL: ``http://127.0.0.1:8000/api/users/1``
- HTTP: GET
