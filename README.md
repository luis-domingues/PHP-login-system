# PHP Registration and Login System *UPEDATE*

> Status: Development ⚠️

![Tela inicial](https://github.com/luis-domingues/PHP-login-system/assets/157630664/804327a0-4217-462c-9bc0-c983e7e60937)

## Description

This is a simple registration and login system built with PHP, SQL (with OOP), CSS, JavaScript, and Bootstrap Icons. The project serves as a starting point for developing a fully PHP-based personal dashboard.

## Changes in this update
- **Dashboard Page `dashboard.php`:**
/ Added centralized content display in the .dashboard-main section.
/ Positioned the content at the top of the screen for better visibility and accessibility.
/ Integrated OpenWeatherMap API to display weather information.
- **Settings Page `settings.php`:** Implemented an option for users to delete their accounts./
  Upon clicking the delete account option, users are redirected to the index.php page, and their account is deleted from the database.

## Technologies Used

- **PHP:** Programming language for server logic and interaction with the database.
- **MySQL:** Relational database management system for storing and manipulating data.
- **Bootstrap:** Front-end framework for developing responsive and styled web interfaces.
- **JavaScript:** Programming language for adding interactivity and dynamic functionalities to the website.
- **KUTE.js:** JavaScript library for smooth animations and transitions.
- **OpenWeatherMap API:** Used to fetch weather information for display on the dashboard.

## General Recommendations

- **Requirements:**
<table>
  <tr>
    <td>PHP</td>
    <td>MySQL</td>
    <td>Bootstrap</td>
    <td>KUTE.js Library</td>
    <td>OpenWeatherMap API Key</td>
  </tr>
  <tr>
    <td>7.0 or higher</td>
    <td>5.6 or higher</td>
    <td>1.11.3 or higher</td>
    <td>2.2.4 or higher</td>
    <td>An API key at [OpenWeatherMap](https://openweathermap.org/api)</td>
  </tr>
</table>

- **Installation on Windows:** It is recommended to use `WAMPSERVER` version 3.3.2. [Download]([link_to_download](https://www.wampserver.com/))
- **Installation on Linux:** [Tutorial](https://vitux.com/ubuntu-xampp/)
- **Installation on MacOS:** [Tutorial](https://medium.com/analytics-vidhya/download-and-install-xampp-on-mac-oshow-to-download-and-install-xampp-on-mac-os-97705974080d)

- **Database Configuration:**
  - ![image](https://github.com/luis-domingues/PHP-login-system/assets/157630664/1600ac8e-0a63-4941-9e83-055d7ade9988)

## Records Used in the Table

## How to Use

1. Clone or download the repository.
2. Use the table template provided in the "General Recommendations" section for the database.
3. Configure the `conection.php` file with the database information.
4. Run the project on a local server.

## Methodology

![Diagrama em branco (2)](https://github.com/luis-domingues/PHP-login-system/assets/157630664/2016d3af-9ac7-4a8b-85a8-8af72acca238)

1. **Create Directory:** Start by creating a directory named "sistema_login" within the "www" directory of your WAMP SERVER.
2. **Create Files:** Create two files named index.php and conection.php within the "sistema_login" directory.
3. **Index.php:** This file serves as the welcome screen. It provides options for users to either login or register.
4. **Login:** When the login button is clicked, users are redirected to the login screen (login.php) where they need to enter their credentials.
5. **Registration:** When the register button is clicked, users are redirected to the registration screen (cadastro.php) where they need to enter their details.
6. **Back Button:** Both the login and registration screens have a back button (symbolized by an arrow) at the top right to return to the welcome screen (index.php).
7. **Database Connection:** conection.php is responsible for establishing a connection between the application and the database.

