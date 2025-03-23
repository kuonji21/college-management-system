# College Management System

A Laravel-based CRUD application for managing colleges and departments.

## Project Overview

This application allows users to:
- Create, read, update, and delete colleges
- Create, read, update, and delete departments
- Associate departments with colleges

## Setup Instructions

### Prerequisites
- PHP 8.0 or higher
- Composer
- MySQL or SQLite
- Git

### Installation Steps

1. Clone the repository:
   
    git clone https://github.com/kuonji21/college-management-system.git cd college-management-system

2. Install dependencies:
   
    composer install

3. Set up environment:

    cp .env.example .env php artisan key:generate

4. Configure database in .env file:
   
    DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=college_management DB_USERNAME=root DB_PASSWORD=

5. Run migrations:
    
    php artisan migrate

6. Seed the database (optional):
    
    php artisan db:seed

13. Start the development server:
    
    php artisan serve
## Git Workflow

We follow a feature-branch workflow:

1. `main` branch contains the stable, production-ready code
2. Feature branches are created for new features or bug fixes
3. Pull requests are used to merge changes into `main`

### Branch Naming Convention

- Feature branches: `feature/feature-name`(e.g., feature/college-validation)
- Bug fix branches: `fix/bug-name`(e.g., fix/database-timeout)

### Pull Request Process

1. Create a new branch from `main` :
   
    git checkout -b feature/feature-name

2. Make your changes and commit them
   
    git add .
   
    git commit -m "feat: Added input validation for college form"
   
3. Push your branch to GitHub
   
    git push origin feature/feature-name
   
4. Create a pull request
   
    Link the PR to the relevant issue using Closes #issue-number.
    Assign a reviewer (your partner).
   
5. Wait for code review and approval
    
6. Merge the pull request into main after approval.

## Contributors

- [Lance Paul Montemar](https://github.com/kuonji21)
- [Nino Angelo Lawan](https://github.com/Nino0s)
