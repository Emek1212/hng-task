# HNG12 Backend Task - Public API

Welcome to my HNG12 Backend Stage 0 task!  
In this task, I have developed a simple public API that returns basic information in JSON format.

## Task Description

This API provides the following information:
- My registered email address.
- The current date and time in ISO 8601 format (UTC).
- A link to the GitHub repository containing the project.

## Setup Instructions

To run the project locally:

Clone the repository:
    ```sh
    git clone https://github.com/Emek1212/hng-task
    ```

Navigate to the project directory:
    ```sh
    cd hng-task
    ```

 Run the PHP server:
    ```sh
    php -S localhost:8080
    ```

This will start a local server where you can test the API by visiting `http://localhost:8080`.

## API Specification
- **Endpoint**: `GET /`

### Live API URL:
The API is hosted at the following URL:  
[https://hng-task-production-cdb6.up.railway.app](https://hng-task-production-cdb6.up.railway.app)

### JSON Response Format (200 OK):
```json
{
  "email": "chosennseobong@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/Emek1212/hng-task"
}
