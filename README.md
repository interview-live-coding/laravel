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

## Part 1. Code Refactoring (Improvement)
1. Please review the code in `routes/api.php`, `app/Http/Controllers/BuildingController.php` and `app/Http/Controllers/Building.php` and refactor the code if needed.


2. Please modify the code to retrieve a list of building types along with their addresses in the following format:
```json
{
  "data": [
    {
      "building_type": "Dolorem velit recusandae",
      "buildings": [
        {
          "address": "912 Pearline Squares, Port Shyannmouth, Utah 06838"
        },
        {
          "address": "1590 Kassandra Prairie Apt. 451, Lake Vicky, Rhode Island 62395-3095"
        }
      ]
    },
    {
      "building_type": "Qui quis qui",
      "buildings": [
        {
          "address": "397 Kihn Shore Apt. 012, Ernserchester, Vermont 55062-4349"
        },
        {
          "address": "88138 Beier Harbors Suite 601, Port Berniece, Idaho 09183-9597"
        },
        {
          "address": "31628 Schuster Drive, East Abdullahburgh, Indiana 53499-5620"
        },
        {
          "address": "996 Elinore Common, Beiershire, Delaware 96596-9550"
        }
      ]
    }
  ]
}
```
## Part 2. Endpoint implementation

We have two entities (models and tables):

- User
- Transaction

Each user has many transactions. Each transaction has `amount`.

Please implement the endpoint to retrieve the SUM of transactions amounts for each user. Please order the results by amounts (descending). The expected response format is:
```json
{
  "data": [
    {
      "id": 20,
      "name": "Cassidy Schmeler",
      "total_amount": 5323.29
    },
    {
      "id": 18,
      "name": "Raymundo Schmitt",
      "total_amount": 4783.82
    },
    {
      "id": 6,
      "name": "Mrs. Heloise Nader DDS",
      "total_amount": 4629.29
    },
    {
      "id": 10,
      "name": "Keenan Haley",
      "total_amount": 3791.27
    }
  ]
}
```
