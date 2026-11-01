# Escape Room

Web-based escape room game built with PHP, MySQL and JavaScript. Players answer questions correctly to advance to the next level until they reach the final screen.

## Features

- Level-based gameplay: a correct answer unlocks the next level
- Questions and game data stored in a MySQL database
- Final screen shown when the game is completed

## Tech stack

- PHP (mysqli)
- MySQL
- JavaScript
- HTML and CSS

## Project structure

- `index.php`: start page
- `juego.php`: game screen
- `final.php`: final screen
- `conexion.php`: database connection
- `escape_room.sql`: database schema and data
- `estilos.css` and `script.js`: styles and client-side logic

## Run locally

1. Install [XAMPP](https://www.apachefriends.org/) and start Apache and MySQL.
2. Create a database named `escape_room` and import `escape_room.sql`.
3. Copy the project folder into `htdocs`.
4. Check the MySQL port in `conexion.php` (it is set to `3307`; the XAMPP default is `3306`).
5. Open `http://localhost/<folder-name>/index.php` in your browser.
