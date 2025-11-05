This is a fully functional Laravel-based authentication system.
Featuring:
* User Registration (with Profile Image Upload)
* Manual Login \& Logout (no Breeze)
* User Dashboard with Profile Edit functionality.
* Database-based session handling


##### **Features**

* Animated Login, Registration, and Dashboard pages
* Responsive design using Tailwind CSS
* Profile update with image upload


##### **Prerequisites**

Make sure you have the following installed in your system:
* PhP 8.1+
* Composer
* MySQL
* Node.js \& npm 

// Before starting the project installation process you should start Apache and MySQL from XAMPP Control Panel.

##### Installation Steps

1️⃣ Clone or download this repository

git clone- https://github.com/ashif2433/animated-auth-system.git

Then go inside the folder where you have download the repository and from there run any CLI (command-line interface).
* CMD 	      =  Click on address bar and type cmd then press enter.
* PowerShell  =  Hold down the Shift key on your keyboard and right-click on an empty space within the folder. 
* Gitbash	  =  Right-click on an empty space within the folder.

Run:
    cd animated-auth-system


2️⃣ Install dependencies
Run:

    composer install

If you’re using Tailwind for custom builds:
Run:

    npm install


3️⃣ Configure the .env file
Duplicate the example file and rename it:
Run:

    cp .env.example .env

Now open (.env) in your editor and update these values :

    APP\_NAME="Animated Auth System"
    APP\_URL=http://127.0.0.1:8000

    DB\_CONNECTION=mysql
    DB\_HOST=127.0.0.1
    DB\_PORT=3306
    DB\_DATABASE=animated\_auth
    DB\_USERNAME=root
    DB\_PASSWORD=

⚠️ Replace DB\_USERNAME and DB\_PASSWORD with your local database credentials.


4️⃣ Generate app key
Run:

    php artisan key:generate


5️⃣ Create the database
Manually create a new database name as "animated_auth"  (e.g., via phpMyAdmin or MySQL CLI) :

CREATE DATABASE animated_auth;


6️⃣ Run migrations
Run:

    php artisan migrate

This will create tables for users, sessions, jobs, and others.


7️⃣ Run the local development server
Run:

    php artisan serve

Then visit:
👉 http://127.0.0.1:8000

You’ll see the Welcome Page with links to Register and Login.



##### Key Artisan Commands Reference

Command	                          Description

php artisan serve	         -    Start local server
php artisan migrate:fresh	 -    Reset and re-run all migrations
php artisan key:generate	 -    Generate app key
php artisan cache:clear	     -    Clear application cache
php artisan view:clear	     -    Clear compiled views
php artisan route:list	     -    View all routes


##### Project Structure

animated-auth-system/

├── app/

│   ├── Http/

│   │   ├── Controllers/

│   │   │   ├── Auth/

│   │   │   │   ├── RegisterController.php

│   │   │   │   ├── LoginController.php

│   │   │   ├── DashboardController.php

│   ├── Models/User.php

├── database/

│   ├── migrations/

├── public/

│   ├── uploads/

│   ├── index.php

├── resources/

│   ├── views/

│   │   ├── auth/

│   │   │   ├── login.blade.php

│   │   │   ├── register.blade.php

│   │   ├── dashboard.blade.php

│   │   ├── edit-profile.blade.php

│   │   ├── welcome.blade.php

├── routes/

│   ├── web.php

├── .env

└── composer.json


##### Image Upload Directory

All user profile images are stored in:

animated-auth-system/

├──public/

└──└── uploads/

// Make sure this folder exists and has proper write permissions.


👨‍💻 ##### Author

Md. Ashrafur Rahman Bhuiyan

📧 Email: ashrafurrahmanasif191@gmail.com

🌐 Portfolio: https://ashrafur-rahman.netlify.app/#home

💼 LinkedIn: https://www.linkedin.com/in/md-ashrafur-rahman-80b761231/


 **** THANK YOU ****
