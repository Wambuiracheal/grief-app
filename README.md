<p align="center">
    <img src="https://github.com/andymush/Gym-session-system/blob/main/public/assets/images/top.png" width="400">
    </a>
</p>

## ABOUT 
This project entails a gym management system that enables users to manage their gym activities.



## FEATURES

* Deleting Property
* Uploading Property
* Creating Account
* Advertise vacancy
* Reporting
* Flagging/Banning Property


## INSTALLATION/RUNNING THE APP
Note: Make sure you have git installed locally on your computer first.
cd into the directory where you want to clone the project

1. Clone GitHub repo for this project locally
   git clone https://github.com/andymush/Gym-session-system.git
   
   
2. cd into your project


3. Install Composer Dependencies -->
   composer install
   

4. Create a copy of your .env file -->
  cp .env.example .env


5. Generate an app encryption key -->
    php artisan key:generate


6. Create an empty database for our application and give it a name e.g "gym"


7. In the .env file, add database information to allow Laravel to connect to the database


8. Migrate the database -->
    php artisan migrate

9.Run the application  -->
    php artisan serve

10. Seed the database -->
    php artisan db:seed

11. Run the server -->
    php artisan serve

