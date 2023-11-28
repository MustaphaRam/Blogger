# Blogger

## Description

Blogger is a Symfony-based web application for creating and managing blog posts, comments, and users.

## Features

- **User Management:** Create, edit, and delete user accounts with different roles (e.g., admin, regular user).
- **Blog Posts:** Create, edit, and delete blog posts.
- **Comments:** Allow users to leave comments on blog posts.

## Installation

### Prerequisites

- PHP 7.4 or later
- Composer
- Symfony CLI
- MySQL database

### Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/MustaphaRam/blogger.git
   ```
Install dependencies:

```bash
cd blogger-symfony
composer install
```
Configure the database in the .env file:

``` dotenv
# .env
DATABASE_URL=mysql://admin:admin123@127.0.0.1:3306/db_blogger
```
Create the database:

``` bash
php bin/console doctrine:database:create
```
Run migrations to create the schema:

```bash
php bin/console doctrine:migrations:migrate
```
Start the Symfony development server:

```bash
symfony server:start
```
Open your browser and visit http://localhost:8000 to access the application.

Usage
Create a new account or log in if you already have one.
Create blog posts, edit them, and delete them.
Leave comments on blog posts.
Contributing
If you'd like to contribute to this project, please follow these guidelines:

Fork the repository.
Create a new branch for your feature or bug fix: git checkout -b feature-name.
Implement your changes and commit them: git commit -m "Your descriptive commit message".
Push the changes to your fork: git push origin feature-name.
Open a pull request.
License
This project is licensed under the MIT License.

Acknowledgments
Symfony - The PHP framework used for this project.
sql


![image](https://github.com/MustaphaRam/Blogger/assets/125461674/5e07019f-d948-444c-85a5-d8fb943df346)
