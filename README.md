# Laravel Student Management API

A simple Laravel CRUD application for managing student records through RESTful API endpoints.

## Features
- Create, read, update, and delete student records
- RESTful API endpoints
- Simple student data model with name, address, and phone

## Requirements
- PHP 8.1+
- Composer
- Laravel 10.x
- MySQL or compatible database

## Installation

### Clone the repository:

```bash
git clone https://github.com/your-username/lbs-app.git
cd lbs-app
```

### Install dependencies:

```bash
composer install
```

### Set up environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

Update the `.env` file for the database connection:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lbs_app
DB_USERNAME=root
DB_PASSWORD=
```

### Run migrations:

```bash
php artisan migrate
```

### Start the development server:

```bash
php artisan serve
```

## API Documentation

### Student Endpoints

| Method | Endpoint                  | Description               |
|--------|---------------------------|---------------------------|
| GET    | /api/student               | Get all students          |
| GET    | /api/student/{id}          | Get a specific student    |
| POST   | /api/student               | Create a new student      |
| PUT/PATCH | /api/student/{id}        | Update a student          |
| DELETE | /api/student/{id}          | Delete a student          |

### Sample Requests

#### Create a Student

**POST** /api/student  
**Content-Type:** application/json

```json
{
    "name": "John Doe",
    "address": "123 Main St",
    "phone": "555-1234"
}
```

#### Update a Student

**PUT** /api/student/1  
**Content-Type:** application/json

```json
{
    "name": "John Doe",
    "address": "456 Oak St",
    "phone": "555-5678"
}
```

## Database Structure

The main table in the database is `students`:

| Column      | Type       | Description               |
|-------------|------------|---------------------------|
| id          | bigint     | Primary key               |
| name        | string     | Student name              |
| address     | string     | Student address           |
| phone       | string     | Student phone number      |
| created_at  | timestamp  | Creation timestamp        |
| updated_at  | timestamp  | Last update timestamp     |

## Technologies Used
- Laravel 10.x
- PHP 8.1+
- MySQL
- RESTful API design principles
```
