# User Management System 

Laravel project to apply CRUD functionalities on users.

## Getting Started

1. Clone or download the repository
2. move into the project directory
3. Install laravel dependencies using `` composer install  ``
4. Install npm dependencies using `` npm install ``
5. Fill all the database information in the ".env" file
6. Generate app encryption key using `` php artisan key:generate ``
7. Generate the database tables using `` php artisan migrate `` 
8. Run `` php storage:link `` to connect public folder to storage folder
9. **Important**: \
Generate Admin using `` db:seed `` \
email: "admin@admin.com", password: "password"
10. Run `` php artisan serve `` to open the project

## Features About The Project

- Has Multiple Authentication, Admin Authentication and User Authentication

- There is no registration form for admins, only for users

- To generate admin you must run `` php artisan db:seed ``

- login form is mutual between users and admin but it will direct users to their home page and admins to their admin panel

- Forms has validation

