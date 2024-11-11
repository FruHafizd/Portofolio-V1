# Personal Portfolio Website

This is a personal portfolio website built using **Laravel 11** and **Tailwind CSS**. It showcases my projects, skills, and experience.

## Project Setup

### Prerequisites

- **PHP** (>= 8.2)
- **Composer** (Dependency Management)
- **Node.js** and **NPM** (for Tailwind CSS and frontend assets)

### Installation

Follow these steps to set up the project on your local machine:

1. **Clone the Repository**

   Clone the repository from GitHub and switch to the `main` branch:
   ```bash
   git clone -b main https://github.com/FruHafizd/Portofolio-V1.git
   cd Portofolio-V1
   ```

2. **Install Composer Dependencies**

   Install the PHP dependencies required for Laravel:
   ```bash
   composer install
   ```

3. **Install NPM Dependencies**

   Install Node dependencies for Tailwind CSS and other frontend tools:
   ```bash
   npm install
   ```

4. **Environment Setup**

   Copy the `.env.example` file to create a new `.env` configuration file:
   ```bash
   cp .env.example .env
   ```

   Generate a new application key:
   ```bash
   php artisan key:generate
   ```

5. **Database Setup**

   Configure your database settings in the `.env` file, then run migrations to set up the tables:
   ```bash
   php artisan migrate
   ```

6. **Compile Assets**

   Compile the frontend assets using Tailwind CSS:
   ```bash
   npm run dev
   ```

7. **Run the Development Server**

   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

8. **Access the Application**

   Open your browser and go to `http://localhost:8000` to view the portfolio website.

---

### Additional Commands

- **Run Production Build**: For deployment, you can compile assets with:
  ```bash
  npm run build
  ```

## License

This project is open-source and available under the MIT License.
```

This `README.md` should now be suitable for a Laravel 11-based portfolio project.