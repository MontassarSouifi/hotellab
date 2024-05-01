<p align="center"> 
  <img src="https://hotellab.io/img/logo-full.176f55a0.svg" alt="Sample signal" width="50%" height="50%">
</p>


<h4 align="center">
  <a href="https://github.com/amplication/amplication/actions/workflows/ci.yml">
    <img src="https://img.shields.io/github/actions/workflow/status/amplication/amplication/ci.yml?branch=master&label=pipeline&style=flat-square" alt="continuous integration" style="height: 20px;">
  </a>
  <a href="https://github.com/amplication/amplication/graphs/contributors">
    <img src="https://img.shields.io/github/contributors-anon/amplication/amplication?color=yellow&style=flat-square" alt="contributors" style="height: 20px;">
  </a>
  <a href="https://opensource.org/licenses/Apache-2.0">
    <img src="https://img.shields.io/badge/apache%202.0-blue.svg?style=flat-square&label=license" alt="license" style="height: 20px;">
  </a>
  </a>
</h4>

## Authors

- [@nourabid](https://github.com/nourabid)
- [@Omar-ABDELKEFI](https://github.com/Omar-ABDELKEFI)
- [@MontassarSouifi](https://github.com/MontassarSouifi)
- [@octokatherine](https://www.github.com/octokatherine)



# HotelLab - Online Hotel Booking Platform.

`HotelLab` is your cost-effective solution for building robust hotel booking websites. Easily manage users, hotels, rooms, and listings without the hassle of expensive development. Streamline your online presence and attract more guests with HotelLab.

![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

## Screenshots

![App Screenshot](https://i.ibb.co/NCW6VT6/Capture-d-cran-155.png)

![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)
## Table of Contents

<details open="open">
  <ol>
    <li><a> ➤ About The Project</a></li>
    <li><a> ➤ Prerequisites</a></li>
    <li><a> ➤ Folder Structure</a></li>
    <li><a> ➤ Dataset</a></li>
    <li><a> ➤ Roadmap</a></li>
    <li><a> ➤ Preprocessing</a>
      <ul>
    <li><a> ➤ Pre-processed data</a></li>
    <li><a> ➤ Statistical feature</a></li>
    <li><a> ➤ Topological feature</a></li>
      </ul>
    </li>
    <li><a> ➤ Results and Discussion</a></li>
    <li><a> ➤ References</a></li>
    <li><a> ➤ Contributors</a></li>
  </ol>
</details>

![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

# Development

[![Laravel](https://img.shields.io/badge/Made%20with-Laravel-ff2d20.svg?style=for-the-badge&logo=laravel)](https://laravel.com/)
[![Git](https://img.shields.io/badge/Version%20Control-Git-F05032.svg?style=for-the-badge&logo=git)](https://git-scm.com/)
[![MySQL](https://img.shields.io/badge/Database-MySQL-blue.svg?style=for-the-badge&logo=mysql)](https://www.mysql.com/)

> **Note :**
> On the "assets" folder, We keep all kinds of assets like CSS, JS, Images. If you want To edit or change anything over CSS or js, please have a look at this folder.

> On the "core" folder, We keep the core of Laravel and we maintain full MVC structure on this project.

## Server Requirements

![PHP](https://img.shields.io/badge/PHP-7.4-blue?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-blue?style=for-the-badge&logo=mysql)

![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

# Installation
## Installation using Viserlab
<p align="center"> 
  <img src="https://viserlab.com/assets/images/logoIcon/logo-dark.png" alt="Sample signal" width="50%" height="50%">
</p>


1. Upload the whole file to the server you have downloaded from download.
2. Extract/Unzip the file and move all files from the "Files" folder to your main installation folder. Ensure you also move the index.php and .htaccess files.
3. Now browse http://your-site-url/install/index.php and follow the pocess. 
4. Insert your database information into the appropriate configuration file.
5. Your system should now be ready to use.

![App Screenshot](https://i.ibb.co/TYd1jBJ/Capture-d-cran-2024-05-01-195405.png)

## Manual Installation with .env Configuration

```shell
# 1. Clone the repository to your local machine:
git clone https://github.com/MontassarSouifi/hotellab

# 2. Navigate to the project directory:
cd hotellab

# 3. Install Composer dependencies:
composer install

# 4. Copy the `.env.example` file and rename it to `.env`:
cp .env.example .env

# 5. Generate an application key:
php artisan key:generate

# 6. Open the `.env` file and configure your database connection:
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

```shell
# Replace `your_database_name`, `your_database_username`, and `your_database_password` 
# with your actual database credentials.

# 7. Run database migrations:
php artisan migrate

# 8. Start the Laravel development server:
php artisan serve
```
![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

## Folder Structure
After installation, There will be two folders and two files will be in your main folder.

```
├─ .htaccess
├─ .idea
├─ assets
│  ├─ errors
│  │  ├─ css
│  │  └─ images
│  ├─ font
│  ├─ global
│  ├─ images
│  └─ templates
├─ core
│  ├─ .editorconfig
│  ├─ .env
│  ├─ .styleci.yml
│  └─ app
├─ index.php
└─ README.md
```

![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

##  Admin Dashboard

![App Screenshot](https://i.ibb.co/xgYTRRx/Capture-d-cran-159.png)

> **Note:** You can manage the admin profile using the top right button! No need to edit the code or database.



##  Hotel OverView

![App Screenshot](https://i.ibb.co/JFsGbpC/Capture-d-cran-156.png)

> **Note:** From here, visitors or users able to check details about hotel, there room, service, comments and rating.



##  User Dashboard


![App Screenshot](https://i.ibb.co/vjZztWt/Capture-d-cran-161.png)

> **Note:** The User Dashboard is designed for users. Users can manage everything on their dashboard, according to the pricing plan, they will be able to buy packages, can withdraw amounts, and can see the wallet.

![row](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

## FAQ

#### Can I customize the appearance of my hotel booking website?

Yes, HotelLab offers customizable templates and CSS options for easy branding.

#### Is technical support provided for HotelLab users?

Yes, we offer technical support for any setup or usage questions..




## License

[MIT](https://choosealicense.com/licenses/mit/)
