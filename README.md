# Laravel API with Job Queue and Event Handling

## Setup Instructions
1. Clone the repository
2. Install dependencies: `composer install`
3. Set up the database in the `.env` file
4. Run migrations: `php artisan migrate`
5. Serve the application: `php artisan serve`

## Testing the API
1. Make a `POST` request to `/api/submit` with the following JSON payload:
    ```json
    {
        "name": "John Doe",
        "email": "john.doe@example.com",
        "message": "This is a test message."
    }
    ```
2. Check the Laravel logs for successful submission messages.

## Running Tests
- Run unit tests using `php artisan test`
