# Soccer Management System

<img align="center" src="https://cdn.discordapp.com/attachments/581018943041306641/1214625754906759209/image.png?ex=65f9cb62&is=65e75662&hm=658ca96d1c1862275fc5184e001ffaf8953e5d32992c3f70227dad62063579d8&">

A PHP-based application for managing soccer teams and players.

## Features

- Add teams and players to the system
- View a list of all teams and players

## Requirements

- PHP 5.3 or higher
- MariaDB database
- Nginx

you can download [WinNMP.wtriple.com/](https://sourceforge.net/projects/wtnmp/files/latest/download) [windows only]

## Database

The application uses a MySQL database named `db_soccer` with the following tables:

- `tblpersonalsoccer` (`per_id`, `per_name`, `national`, `position`, `team_id`)
- `tblteam` (`team_id`, `team_name`)

## Installation

1. Clone the repository
2. Import the database file to MySQL

```
mysql -u [username] -p [password] < db_soccer.sql
```

3. Edit the `connect.php` file with your database credentials

```php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_soccer";
```

4. Place the project in the web server's document root or set up a virtual host

## Usage

1. Access the application in your web browser

```
http://localhost/soccer-management-system
```

2. Use the navigation menu to add, view, edit, and delete teams and players.

## Contribution

If you would like to contribute to this project, please fork the repository and create a pull request with your changes.

## License

This project is licensed under the MIT License.
