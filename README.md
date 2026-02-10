# Marwin Mandocdoc - WAD2 Portfolio (Laravel)
 
 A simple portfolio website built for WAD2 using Laravel (PHP) and Blade templates. The site includes a main landing page and two sub-pages (About Me and Projects) styled with TailwindCSS (via CDN) and Font Awesome icons.
 
 ## Pages
 
 - **Main portfolio page (Home)**
   - **Route**: `/`
   - **View**: `resources/views/home.blade.php`
   - **Highlights**:
     - Hero section: "Hi, I'm Marwin Mandocdoc" + "WAD2 Student"
     - Buttons to `About Me` and `My Projects`
     - Social links: Facebook, Instagram, LinkedIn
 
 - **Sub-page 1 (About Me)**
   - **Route**: `/about`
   - **Controller**: `app/Http/Controllers/AboutController.php`
   - **View**: `resources/views/about.blade.php`
   - **Highlights**:
     - Bio/intro section
     - "What I Do" cards generated from a controller-provided list
     - Sections for: MCGI, Capture The Flag, Projects, Video Editor
 
 - **Sub-page 2 (Projects)**
   - **Route**: `/project`
   - **Controller**: `app/Http/Controllers/ProjectController.php`
   - **View**: `resources/views/project.blade.php`
   - **Highlights**:
     - Featured project summaries (Student Tracker, ClassSched)
     - "Selected Projects" cards generated from a controller-provided list
     - Detailed sections with images for Student Tracker and ClassSched
 
 ## Screenshots / Page Content
 
 - **Main portfolio page (Home)**

     `![Home Page](../public/images/screenshot/Screenshot-home.png)`
 
 - **Sub-page 1 (About Me)**
 
     `![About Page](../public/images/screenshot/Screenshot-about.png)`
 
 - **Sub-page 2 (Projects)**
     
     `![Projects Page](../public/images/screenshot/Screenshot-projects.png)`
 
 ## How to Run Locally
 
 ### Requirements
 
 - **PHP**: 8.2+
 - **Composer**
 - **Node.js + npm** (for Vite)
 
 ### Setup
 
 1. Install PHP dependencies:
    
    ```bash
    composer install
    ```
 
 2. Create your `.env` file:
    
    If you have `.env.example`, copy it to `.env`. If not, create a `.env` file and configure it.
 
 3. Generate an application key:
    
    ```bash
    php artisan key:generate
    ```
 
 4. Install frontend dependencies:
    
    ```bash
    npm install
    ```
 
 ### Run
 
 In one terminal, start the Laravel server:
 
 ```bash
 php artisan serve
 ``` 
 Then open:
 
 - `http://127.0.0.1:8000`
 
 ## Routes
 
 - `/` (Home)
 - `/about` (About Me)
 - `/project` (Projects)
