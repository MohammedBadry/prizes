
<!-- GETTING STARTED -->
## Getting Started

This is a task solution of php oop import excel example.
To get a local copy up and running follow these simple example steps.


### Installation

1. Clone the repo in your localhost www folder
   ```sh
   git clone https://github.com/MohammedBadry/prizes.git
   ```
2. Open terminal in the project root directory and run
   ```js
   composer install
   npm install
   ```
3. Enter your DB Settings in `.env` in the root directory
   ```js
   const DB_HOST = 'ENTER YOUR Host Name';
   const DB_NAME = 'ENTER YOUR Database Name';
   const DB_USER = 'ENTER YOUR Database Username';
   const DB_PASSWORD = 'ENTER YOUR Database Password';
   ```
2. Open terminal in the project root directory and run
   ```js
   php artisan migrate --seed
   php artisan key:generate
   php artisan serve
   ```
6. Open the project on your
   ```js
    http://127.0.0.1:8000
   ```