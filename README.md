# Documentation:
- [Overview of the project](#overview-of-the-project)
- [Setup instructions](#setup-instructions)
- [Explanation of the design pattern chosen and how it was implemented](#explanation-of-the-design-pattern-chosen-and-how-it-was-implemented)
# Overview of the project.
## Objective:
Develop a basic project management tool that allows users to create, update, delete, and manage projects and tasks, with a focus on core
functionality and clean code. This task should demonstrate your full-stack development skills within a limited timeframe.
## Project Requirements:
### 1. Backend Development:
- **Language & Framework:**
    - Use **PHP** with the **Laravel** framework.
- **Database:**
    - Utilize **MariaDB/MySQL** for data storage. 
- **API Development:**
    - Create RESTful APIs for:
        - **Projects:**
            - CRUD operations (Create, Read, Update, Delete).
            - Fields: `id` , `name` , `description` , `created_at` , `updated_at` .
        - **Tasks:**
            - CRUD operations for tasks within a project.
            - Fields: `id` , `project_id` , `name` , `description` , `status` (e.g., todo, in-progress, done), `created_at` , `updated_at` .
- **Authentication:**
    - Implement basic user authentication using Laravel's built-in system.
- **Database Relationships:**
    - Implement a one-to-many relationship between Projects and Tasks.
### 2. Frontend Development:
- **Core Technologies:**
    - Use **HTML**, **CSS**, and **JavaScript**.
- **Structure:**
    - **Dashboard Page:**
        - List all projects.
    - **Project Detail Page:**
        - Show tasks associated with a specific project.
    - **Task Management:**
        - Allow users to add, edit, or delete tasks within a project.
- **UI/UX:**
    - Keep the design simple and responsive, focusing on basic user interactions.
- **Interactivity:**
    - Implement basic dynamic interactions using JavaScript (AJAX or Fetch API).
### 3. Design Pattern:
Candidates should choose **one** of the following design patterns to implement in their solution:
- **Repository Pattern:**
    - Abstract the data access layer by using repositories for Projects and Tasks.
- **Service Layer Pattern:**
    - Encapsulate business logic within a service layer.
- **Factory Pattern:**
    - Use a factory to handle object creation, such as creating tasks or projects.
### 4. Code Quality & Documentation:
- **Code Structure:**
    - Ensure the code is clean, well-organized, and follows best practices.
- **Documentation:**
    - Include a `README.md` file with:
        - Overview of the project.
        - Setup instructions.
        - Explanation of the design pattern chosen and how it was implemented.
### 5. Deliverables:
- A GitHub repository containing:
    - **Laravel project** with models, controllers, views, and routes.
    - **SQL** script or migrations to set up the database schema.
    - **Front-end** code (HTML, CSS, JavaScript).
    - **README.md** with documentation.
### 6. Evaluation Criteria:
- **Design Pattern Implementation:**
    - Correct and appropriate use of the chosen design pattern.
- **Code Quality:**
    - Well-structured, maintainable code.
- **Functionality:**
    - Core features must work as expected.
- **User Experience:**
    - Simple, intuitive, and responsive UI.
- **Documentation:**
    - Clear explanation of the project and the design pattern.
### 7. Bonus Tasks (Optional):
If you have extra time or want to challenge yourself further, consider implementing one or more of the following bonus tasks. These are not
required, but successful implementation will be viewed favorably:
- **Advanced Search & Filtering:**
    - Implement a search bar or filter functionality to search projects by name or filter tasks by status.
- **User Roles & Permissions:**
    - Expand the authentication system to include roles (e.g., admin, user) and permissions. Ensure that only certain users can perform specific actions.
- **Real-Time Updates:**
    - Use WebSockets (e.g., Laravel Echo and Pusher) to implement real-time updates. For example, automatically update the task list
    - when a new task is added.
- **Dockerization:**
    - Dockerize the application for easy setup and deployment. Provide a `Dockerfile` and `docker-compose.yml` for the environment.
- **Additional Design Patterns:**
    - Implement an additional design pattern from the list provided, or apply a pattern of your choice that suits the problem.
- **Unit & Integration Testing:**
    - Write comprehensive unit and integration tests for your application. Ensure your tests cover the key functionalities and edge cases.
### 8. Time Frame:
- You have **5 days** to complete this case study. The core tasks are designed to be completed within **8-10 hours**. If you choose to work on
bonus tasks, please manage your time accordingly.
### 9. Submission Process:
- Once completed, submit the link to your GitHub repository. Ensure the repository is public or share access with us.
- If you encounter any challenges, feel free to reach out.
# Setup instructions.
- Creating the Project:
    - make sure that your local machine has PHP and [Composer](https://getcomposer.org/) installed. If you are developing on macOS or Windows, PHP, Composer, Node and NPM can be installed in minutes via [Laravel Herd](https://laravel.com/docs/11.x/installation#local-installation-using-herd).
        ```
        composer i
        ```
    - Generate .env file:
        ```
        cp .env.example .env
        php artisan key:generate
        ```

- Databases and Migrations:

    Now that you have created your Laravel application, you probably want to store some data in a database. By default, your application's `.env` configuration file specifies that Laravel will be interacting with a SQLite database.

    During the creation of the project, Laravel created a `database/database.sqlite` file for you, and ran the necessary migrations to create the application's database tables.

    If you prefer to use another database driver such as MySQL or PostgreSQL, you can update your .env configuration file to use the appropriate database. For example, if you wish to use MySQL, update your `.env` configuration file's `DB_*` variables like so:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    If you choose to use a database other than SQLite, you will need to create the database and run your application's [database migrations:](https://laravel.com/docs/11.x/migrations)
    ```
    php artisan migrate
    ```
# Explanation of the design pattern chosen and how it was implemented.