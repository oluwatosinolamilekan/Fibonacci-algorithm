## Raffle Algorithm

#### Use Laravel framework to create a raffle draw API (no UI required) with the following features:

### Only numbers in the fibonacci sequence and between 1 and 1000 are allowed as valid raffle numbers.

- Register Endpoint (Name email and password only)
- Authenticate Endpoint
- Create an endpoint to randomly set three numbers as the winning numbers,  Should return the 3 winner numbers
- Create an endpoint for a user to check if their raffle number is a winning number (e.g. 13) and also passing their country (e.g. Nigeria):
    * - This should also check if the numbers exist.
    -     And if it is a winning number: return a reward of $2USD equivalent to their country's currency. Use any composer library of your choice here (see packagist). * 

-  step 3 and 4 endpoints requires a user to be authenticated to access.

## Technologies

- PHP
- Laravel
- Mysql

## How to run the application
Below are the steps you need to successfully setup and run the application.

- Clone the app from the repository and cd into the root directory of the app
- Run composer install
- Copy .env.example into .env
- Update DB credentials to match with your db
- Run php artisan migrate to migrate database tables
- Run php artisan action:run
