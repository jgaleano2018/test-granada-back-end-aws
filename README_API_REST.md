# Project test-granada-back-end
This project is based on the use of Laravel 8 to provide REST API services and connects to a PostgreSQL database.

# Technology
  - Laravel 8
  - Postgresql
    
# Install Depedendecies
  - composer global require laravel/installer
  - php artisan serve

# Install Database Postgres
  - Ejecutar el script que adiciono a la entrega por chat para pruebas locales: //BackupDB

# Database Configuration Parameters
Access the .env file and modify the following parameters to connect to the local database:
  - DB_CONNECTION=pgsql
  - DB_HOST=localhost
  - DB_PORT=5432
  - DB_DATABASE=postgre
  - DB_USERNAME=postgres
  - DB_PASSWORD=postgres

Access the .env file and modify the following parameters to connect to the database instance on AWS:
  - DB_CONNECTION=pgsql
  - DB_HOST=database-4.cf8c8g2cy0vo.us-east-2.rds.amazonaws.com
  - DB_PORT=5432
  - DB_DATABASE=postgre
  - DB_USERNAME=postgres
  - DB_PASSWORD=postgres2025##

# Paths Executable
The following URLs correspond to the endpoints published in the local environment and can be validated in Postman:
  - GET http://localhost:8000/graphql
  - POST http://localhost:8000/logCountries
  - PUT http://localhost:8000/logCountriesEdit
  - DELETE http://localhost:8000/logCountriesDelete

The following URLs correspond to the endpoints published in AWS and that connect to the deployment pipelines in the main branch of GitHub:
  - GET http://testgranadabackend.us-east-2.elasticbeanstalk.com/graphql
  - POST http://testgranadabackend.us-east-2.elasticbeanstalk.com/logCountries
  - PUT http://testgranadabackend.us-east-2.elasticbeanstalk.com/logCountriesEdit
  - DELETE http://testgranadabackend.us-east-2.elasticbeanstalk.com/logCountriesDelete
