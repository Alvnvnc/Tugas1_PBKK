# Laravel Routing and MVC Example

This repository contains a Laravel project demonstrating various routing techniques and an MVC (Model-View-Controller) structure to generate and display sequences of numbers based on user input. The sequences include Even/Odd numbers, Fibonacci series, and Prime numbers.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Basic Routing**: Demonstrates simple routing using Laravel.
- **Route Parameters**: Captures URL segments as variables.
- **Named Routes**: Allows easier URL generation and redirection.
- **Route Groups**: Groups routes that share attributes like middleware or prefixes.
- **Fallback Routes**: Handles undefined routes gracefully.
- **MVC Implementation**: Uses the Model-View-Controller pattern to generate and display sequences:
  - **Even/Odd Numbers**
  - **Fibonacci Series**
  - **Prime Numbers**

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- **PHP**: Make sure you have PHP installed (version 7.3 or higher).
- **Composer**: Install Composer for managing PHP dependencies.
- **Node.js and npm**: Required for managing JavaScript dependencies and compiling assets.
- **Laravel**: Install Laravel by running `composer global require laravel/installer`.

### Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/username/repository-name.git
    cd repository-name
    ```

2. **Install PHP dependencies**:
    ```bash
    composer install
    ```

3. **Install JavaScript dependencies**:
    ```bash
    npm install
    ```

4. **Copy the `.env.example` file to `.env`**:
    ```bash
    cp .env.example .env
    ```

5. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```

6. **Set up your database**:

    - Edit your `.env` file to match your database settings.

    - Run the migrations and seeders:
    ```bash
    php artisan migrate --seed
    ```

7. **Compile assets** (if applicable):
    ```bash
    npm run dev
    ```

8. **Start the development server**:
    ```bash
    php artisan serve
    ```

9. **Visit the application**:
    Open your browser and go to `http://localhost:8000`.

### Usage

1. **Basic Routing**:
   - Visit the homepage to see basic routing examples.

2. **Genap Ganjil, Fibonacci, and Prime Numbers**:
   - Navigate to `/genapganjil` to input a number and see if it is even or odd.
   - Navigate to `/fibonacci` to generate Fibonacci series based on input.
   - Navigate to `/prime` to find prime numbers up to a given number.

### Project Structure

```markdown
- app/
  - Http/
    - Controllers/
      - NumberController.php
  - Models/
    - Number.php
- resources/
  - views/
    - basic.blade.php
    - fallback.blade.php
    - genapganjil.blade.php
    - fibonacci.blade.php
    - prime.blade.php
    - layouts/
      - app.blade.php
      - navbar.blade.php
- routes/
  - web.php
- public/
  - css/
    - style.css
    - navbar.css
    - fallback.css
