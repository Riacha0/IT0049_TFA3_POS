# IT0049 TFA2 POS System

This CodeIgniter 4 project is a basic Point-of-Sale application. It displays customer and user accounts retrieved from a MySQL database using CodeIgniter Models and Query Builder.

## Features

- Home page
- About page
- Customer Accounts page
- User Accounts page
- MySQL database connection
- CustomerModel and UserModel
- Database records retrieved using findAll()

## Routes

- `/` - Home page
- `/about` - Information about the POS system
- `/customers` - Displays customer records from the database
- `/users` - Displays user and staff records from the database

## Local Setup

1. Install XAMPP, PHP, Composer, and CodeIgniter requirements.
2. Place the project inside the XAMPP `htdocs` folder.
3. Start Apache and MySQL in XAMPP.
4. Open phpMyAdmin.
5. Create a database named `it0049_tfa2_pos`.
6. Import `database/it0049_tfa2_pos.sql`.
7. Configure the database settings in `.env`.
8. Open a terminal inside the project folder.
9. Install the dependencies:

   ```bash
   composer install