# Payment Management System



## Prerequisites

Ensure you have the following software installed:

- PHP >= 8.0
- Composer
- MySQL or any supported database

## Installation


1. **Install dependencies:**

    ```bash
    composer install
    ```

2. **Set up your environment file:**

   Copy the example environment file to create your own `.env` file:

    ```bash
    cp .env.example .env
    ```

3. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

4. **Configure your database:**

   Open the `.env` file and set your database credentials:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

5. **Run migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database:**

   To populate the database with initial data, run the seeder:

    ```bash
    php artisan db:seed
    ```

   This will insert predefined data into your database tables.

7. **Serve the application:**

    ```bash
    php artisan serve
    ```

   The application will be available at `http://localhost:8000`.
