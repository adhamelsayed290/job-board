# Job Board 12

**Job Board 12** is a web application for creating and listing jobs using **Laravel 12**.  
It allows companies to post new job listings, and users to search for jobs by title or tags, with featured and recent jobs displayed in a clean and attractive layout.

---

##  Key Features

1. **Job Listings**  
   - Homepage displays recent jobs and featured jobs.  
   - Supports displaying jobs in horizontal or vertical card formats.  

2. **Search & Tags**  
   - Search jobs by title.  
   - View jobs filtered by tags.  

3. **Job Posting**  
   - Companies can create accounts and post new jobs.  
   - Ability to mark jobs as "Featured" with multiple tags.  

4. **Authentication & User Management**  
   - User registration with employer/company info and logo.  
   - Login and logout functionality.  
   - Authenticated-only access for creating jobs.  

5. **Flexible & Modern UI**  
   - Built with **Tailwind CSS** for a modern design.  
   - Reusable Blade components for Buttons, Panels, Form Fields, Job Cards, and Tags.  

6. **Pagination**  
   - Featured jobs and recent jobs support pagination.  

---

##  Technologies Used

- **Backend**: Laravel 12  
- **Frontend**: Blade Templates + Tailwind CSS + vite
- **Database**: MySQL   
- **ORM**: Eloquent ORM 
- **Authentication**: Laravel Auth (login/register/logout)  
- **Factories & Seeders**: For generating fake data for jobs, employers, and users  

---

---

##  How to Run 

1. **Clone the repository and install dependencies**:  
   ```bash
   git clone <repo-url>
   cd job-board12
   composer install
   ```
   
2.**Copy .env file and generate app key**:
  ```bash
  cp .env.example .env        
  php artisan key:generate
  ```


3. **Run migrations and seeders**:  
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

4. **Start the server**:  
   ```bash
   php artisan serve
   ```

5. **Access the application**:  
   Navigate to http://localhost:8000 in your web browser.

# job-board
