
# Docker Environment Setup for Your Project

## 1. Install Docker

First, you need to install Docker on your machine.

- **Windows/Mac:** Download and install Docker Desktop from [here](https://www.docker.com/products/docker-desktop).

## 2. Set Up Docker for Your Project

Create a new directory for your project or navigate to your existing project.

Example:

```bash

mkdir my-docker-project
cd my-docker-project
```

---

## 3. Create a `Dockerfile`

A `Dockerfile` defines the environment your application will run in. Here's a basic example for a Laravel application:

Create a `Dockerfile` in your project directory:

```bash

echo. > Dockerfile

on poweshell->  New-Item -Path . -Name "Dockerfile" -ItemType "file"

```

Then, open it and add the following content:

```dockerfile
# Use the official PHP image with Apache
FROM php:8.1-apache

# Install required PHP extensions for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install
```

---

## 4. Create a `docker-compose.yml` File

`docker-compose` is used to manage multiple containers (like the database and web server). Create a `docker-compose.yml` file:

```bash
echo. > docker-compose.yml

```

 PowerShell:--> New-Item -Path . -Name "docker-compose.yml" -ItemType "file"

Add the following content:

```yaml
version: '3'
services:
  app:
    build:
      context: .
    container_name: laravel_app
    ports:
      - "8000:80"
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:5.7
    container_name: laravel_db
    environment:
      MYSQL_DATABASE: laravel
      MYSQL_ROOT_PASSWORD: root
    ports:
      - "3306:3306"
    volumes:
      - dbdata:/var/lib/mysql
volumes:
  dbdata:
```

---

## 5. Build and Run the Containers

Now, you can build and run your Docker containers. Run the following commands:

```bash
docker-compose build
docker-compose up -d
```

This will:

- Build your PHP/Apache container for the Laravel app.

- Set up a MySQL container for your database.

---

## 6. Access Your Application

Open your browser and go to `http://localhost:8000`. You should see the Laravel welcome page if everything is set up correctly.

---

## 7. Interacting with Containers

You can run commands inside your containers like this:

- **Access your app container:**

  ```bash

  docker exec -it laravel_app bash
  ```

- **Run Artisan commands:**
  Inside the container, you can run Laravel Artisan commands like:

  ```bash
  php artisan migrate
  ```

---

## 8. Stopping and Removing Containers

When you're done, stop your containers:

```bash
docker-compose down
```

This setup provides a basic environment with Laravel and MySQL running in Docker containers. You can modify and extend this setup depending on your project needs.
