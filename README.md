# cotizador-back

This Laravel allow you to save products and returns it with the dollar cotization.

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

`cd cotizador-back`

3. Install dependencies

`composer install`

4. Start the Docker containers:

`./vendor/bin/sail up`

5. Copy env.example to .env

5. Run database migrations:

`./vendor/bin/sail artisan migrate`




