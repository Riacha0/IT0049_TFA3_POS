# IT0049 TFA4 POS System

This CodeIgniter 4 project is a basic Point-of-Sale application that displays and manages customer and user accounts. TFA4 adds login authentication, password hashing, session management, protected routes, and logout functionality.

## Features

- Home and About pages
- Customer Accounts page
- User Accounts page
- Add and edit customer records
- Add and edit user records
- User avatar upload
- Login and logout functionality
- Password hashing using `password_hash()`
- Password verification using `password_verify()`
- Session-based authentication
- Authentication filter for protected routes
- MySQL database connection
- CustomerModel and UserModel
- Form validation and CSRF protection

## Routes

### Public Routes

- `/` - Home page
- `/about` - Information about the POS system
- `/login` - Login page
- `POST /login` - Processes login credentials

### Protected Routes

The following routes require the user to be logged in:

- `/customers` - Displays customer records
- `/customers/new` - Displays the add-customer form
- `POST /customers/create` - Saves a new customer
- `/customers/edit/{id}` - Displays the customer edit form
- `POST /customers/update/{id}` - Updates a customer
- `/users` - Displays user and staff records
- `/users/new` - Displays the add-user form
- `POST /users/create` - Saves a new user
- `/users/edit/{id}` - Displays the user edit form
- `POST /users/update/{id}` - Updates a user
- `/logout` - Logs out the current user

## Local Setup

1. Install XAMPP, PHP, Composer, and Git.

2. Place the project inside the XAMPP `htdocs` folder:

   ```text
   C:\xampp82\htdocs\IT0049_TFA4_POS
   ```

3. Start Apache and MySQL using the XAMPP Control Panel.

4. Open phpMyAdmin:

   ```text
   http://localhost/phpmyadmin
   ```

5. Create a database named:

   ```text
   it0049_tfa4_pos
   ```

6. Import the following database file:

   ```text
   database/it0049_tfa4_pos.sql
   ```

7. Create or configure the `.env` file using these database settings:

   ```ini
   CI_ENVIRONMENT = development

   database.default.hostname = 127.0.0.1
   database.default.database = it0049_tfa4_pos
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.port = 3306
   ```

8. Open a terminal inside the project folder.

9. Install the project dependencies:

   ```bash
   composer install
   ```

10. Start the CodeIgniter development server:

   ```bash
   php spark serve
   ```

11. Open the application:

   ```text
   http://localhost:8080
   ```

## Test Login Account

Use this account to test authentication:

```text
Username: peter.parker
Password: Pos12345!
```

The password stored in the database is hashed and is not saved as plain text.

## Authentication Flow

1. The user opens the login page.
2. The user enters a username and password.
3. The system searches for the username in the `users` table.
4. The submitted password is checked using `password_verify()`.
5. If the credentials are correct, session data is created.
6. The user is redirected to the Home page.
7. The authentication filter allows access to protected pages.
8. Clicking Logout destroys the session and redirects the user to the login page.

## Security Features

- Passwords are stored using secure password hashes.
- Login passwords are checked using `password_verify()`.
- Protected routes use an authentication filter.
- The session ID is regenerated after successful login.
- Form input is validated before database operations.
- Output is escaped using `esc()`.
- Forms use CSRF protection.
- Password confirmation is required when creating a user.

## Database Export

The project includes the database export at:

```text
database/it0049_tfa4_pos.sql
```
