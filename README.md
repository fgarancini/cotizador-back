# cotizador-back

This Laravel project integrates with the Priaid API to provide symptom and diagnosis data for users. It includes user registration, login, and logout functionality using Laravel Sanctum for API authentication.

## Features

- Create Products
- Get Products

## Prerequisites

-   Docker and Docker Compose
-   PHP
-   Composer

## Installation

1. Clone the repository:

`git clone https://github.com/fgarancini/cotizador-back`

2. Navigate to the project directory:

`cd health-backend-app`

3. Install dependencies

`composer install`

4. Start the Docker containers:

`./vendor/bin/sail up`

5. Run database migrations:

`./vendor/bin/sail artisan migrate`




