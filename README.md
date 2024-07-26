# SMU PCWEB5: Back End Web App Development using Laravel

Welcome to the SMU PCWEB5 project! This repository focuses on back-end web app development using Laravel. The project will guide you through Laravel concepts and hands-on development of a clone of Instagram called Tinkergram.

## Laravel Concepts

- **Model-View-Controller (MVC)**: Understand the structure of Laravel applications through MVC architecture.
- **Routes and REST**: Learn how to set up and manage routes and create RESTful APIs.
- **Blade Template**: Use Laravel’s Blade templating engine to build dynamic views.
- **RESTful Controller**: Implement RESTful controllers to handle HTTP requests.
- **Controllers**: Create controllers to manage application logic.
- **Route Parameters**: Use route parameters to pass data to your routes.
- **Views**: Render views and manage the display of data.
- **Eloquent Model and Migration**: Use Eloquent ORM for database interactions and manage schema changes with migrations.
- **Forms**: Handle form submissions and validations.
- **CSRF**: Implement CSRF protection for your forms.
- **Object-Relational Mapper (ORM)**: Use Eloquent ORM for database operations.

## Guided Project: Tinkergram

We’ll build Tinkergram, an Instagram clone with features including user authentication, photo uploads, and profile management.

### Tinkergram Part 1: Setting Up Laravel, Databases, and Authentication

**Tinkergram Project Youtube Demo**: https://youtu.be/KhLP3rLeSks

**Tinkergram Challenge Project Youtube Demo**: https://youtu.be/RZrG5uMPT3k

#### 1. Create a New Laravel Project

Open a terminal or command prompt and navigate to your Desktop. Execute the following commands to set up a new Laravel project:

```bash
cd Desktop
laravel new tinkergram
```

#### 2. Install Bootstrap Scaffolding
Navigate to your project directory and install Laravel UI for authentication scaffolding:

```bash
cd tinkergram
composer require laravel/ui
npm install
npm run dev
```

#### 3. Setting Up MySQL
You’ll need a MySQL database for this project. Start MySQL on your WAMP/MAMP server. In phpMyAdmin, create a new database for Tinkergram.

#### 4. Connecting Your Database
Open your Laravel project in Visual Studio Code. Locate and open the .env file in the root directory. Configure your database settings according to your WAMP/MAMP setup:

- **WAMP users**: Your default DB port might be 3308.
- **MAMP users**: Your default DB port might be 8889, and your default password is root.

#### 5. Start Your Laravel Application
Ensure you are in the project directory and start the Laravel development server:

```bash
php artisan serve
```

Visit http://localhost:8000 in your browser. You should see the Login and Register buttons, thanks to the authentication scaffold.

#### 6. Database Migration
If you encounter an error when registering an account, it’s likely due to missing tables in your database. Run the migrations to create the necessary tables:

```bash
php artisan migrate
```

Alternatively, you can use phpMyAdmin to run migrations.

# Features to Implement
In Tinkergram, users will be able to:

- **Log In**: Users can access their accounts.
- **Sign Up**: New users can register for an account.
- **Upload Photos and Captions**: Users can upload images and add captions.
- **View Uploads on Profile Page**: Users can view all their uploads on their profile.
- **Create and Update Profiles**: Users can create and update their profile information.

# How to Use
#### 1. Clone the Repository:

```bash
Clone the repository to your local machine using:
gh repo clone GNID-DEV/smu-pcweb5
```

#### 2.Set Up Laravel:

Follow the steps above to create a new Laravel project and set up authentication.

#### 3,Configure Database:

Set up your MySQL database and update the .env file with the correct database credentials.

#### 4.Run Migrations:

Apply database migrations to create the necessary tables.

#### 5.Start Development Server:

Run php artisan serve and visit http://localhost:8000 to see your application.

## Contribution

Contributions to this project are welcome! If you have any suggestions, bug reports, or improvements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.











