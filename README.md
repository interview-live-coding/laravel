## To Run the Project Locally, Please:

- Clone the project from the repository to the current (or another) folder: 

    `git clone https://github.com/interview-live-coding/laravel.git ./`
 
- (Optional) Navigate to the project directory: 

    `cd <project_directory>`
- Install the project dependencies by running: 
 
    `composer install`

- Copy the `.env.example` file to `.env`:

    `cp .env.example .env`

- Set the application key:

  `php artisan key:generate`

- Set up a connection to the RELATIONAL database in the `.env` file (MySQL, PostgreSQL, Sqlite etc.)
 
- Run the migrations

    `php artisan migrate`

- Run the database seeders

    `php artisan db:seed`
