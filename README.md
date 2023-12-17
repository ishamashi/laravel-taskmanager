# PLEASE README FIRST

Sorry, the project I made was not perfect due to time constraints. I made this in 1 hour. I can't make it any longer because I have work to finish because this is my last day working at the current company. If I was given the opportunity more time I would try better and finish it.

There is one feature that is still not finished, namely
Reorder tasks with drag and drop in the browser. Priority should automatically be updated based on this. #1 priority goes at top, #2 next down and so on.

And it still looks really bad. This can still be improved if there is more time

# Task Management Application Setup Instructions

This application uses Laravel as the backend framework, Vue.js for the frontend, and MySQL as the database. The steps below will guide you through the setup process.

## Prerequisites

1. Composer, PHP, and NPM installed.
2. Git for cloning the repository.
3. A MySQL server to store the tasks.

## Setup Steps

1. composer install
2. cp .env.example .env

### Setup ENV

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

## Input Table

1. php artisan migrate

## Run

1. php artisan serve
2. http://localhost:8000

Once the setup is complete, you can use the task management application by navigating to the specified URL in your browser. You can create, edit, and delete tasks, as well as reorder them using drag and drop.

The application uses MySQL as the database, so you should ensure that it is set up correctly to avoid any issues. Additionally, please note that the application is still in development, so it may not be as stable as a production-ready application.
