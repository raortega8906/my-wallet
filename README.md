<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# My Wallet (This project is under construction).

**My Wallet** is a Laravel-based application designed to help users manage their finances efficiently. It allows tracking of income, expenses, savings, and provides automatic calculations for achieving a savings goal.

## Features

- **Salary Management: Keep track of your monthly income.

- **Expense Tracking: Log and categorize your expenses.

- **Extra Income Entries: Register any additional income.

- **Savings Management: Monitor your current savings.

- **Savings Goal Calculation: Automatically calculates the required monthly savings to reach a goal (e.g., €35,000 by January 1, 2025).

- **User-friendly Dashboard: A clean interface to manage all financial records.

## Requirements

Make sure you have the following installed:

- PHP >= 8.1

- Composer

- MySQL or any other compatible database

## Installation

Follow these steps to set up the project locally:

1. Clone this repository:

    ```bash
    git clone https://github.com/raortega8906/password-change-notifications.git
    cd password-change-notifications
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Create the `.env` file from the example provided:

    ```bash
    cp .env.example .env
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Configure the database credentials in the `.env` file.

6. Run the database migrations:

    ```bash
    php artisan migrate --seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

Your application should be running at [http://localhost:8000](http://localhost:8000).

## Contribution

Contributions are welcome! If you'd like to collaborate, please open an issue or submit a pull request.

## Security

If you discover any security vulnerabilities, please report them to [your-email@example.com](mailto:your-email@example.com).

## License

This project is licensed under the [MIT License](LICENSE).