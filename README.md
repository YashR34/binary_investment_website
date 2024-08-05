# Binary Investment Multilevel Website

This is a binary investment multilevel website featuring five different types of earnings. The website includes a public landing page, a user panel named `admin`, and an admin panel named `admin2`. The database used is `imaxcoin.sql`.

## Earnings Types

1. **Direct Earnings**
2. **Matching Earnings**
3. **Staking Earnings**
4. **Matching Level Earnings**
5. **Staking Level Earnings**

## Technologies Used

- HTML
- CSS
- bootstrap
- JavaScript
- PHP
- MySQL

## Panels

- **Public Landing Page**: Accessible to all users.
- **User Panel (`admin`)**: For registered users to manage their investments and earnings.
- **Admin Panel (`admin2`)**: For administrators to manage the platform.

## Getting Started

### Prerequisites

- XAMPP or any other PHP and MySQL development environment
- Git

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/YashR34/binary_investment_website.git
    cd binary_investment_multilevel_website
    ```

2. Move the project files to your XAMPP htdocs directory:
    ```sh
    mv binary_investment_multilevel_website /path/to/xampp/htdocs/imaxcoin
    ```

3. Create a database in MySQL:
    - Open phpMyAdmin (http://localhost/phpmyadmin)
    - Create a new database named `imaxcoin`

4. Import the `imaxcoin.sql` file into the `imaxcoin` database:
    - In phpMyAdmin, select the `imaxcoin` database
    - Go to the Import tab
    - Choose the `imaxcoin.sql` file from the project directory
    - Click Go

5. Update the database configuration in `config.php` file:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "imaxcoin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```



7. Start XAMPP and ensure Apache and MySQL are running.

8. Access the website by navigating to:
    ```
    Public Landing Page: http://localhost/imaxcoin
    User Panel: http://localhost/imaxcoin/admin
    Admin Panel: http://localhost/imaxcoin/admin2
    ```

## Usage

- **Public Landing Page**: General information and registration/login access.
- **User Panel (`admin`)**: Users can view and manage their investments and track earnings.
- **Admin Panel (`admin2`)**: Administrators can manage users, investments, and the overall platform.

## Contributing

1. Fork the repository.
2. Create your feature branch:
    ```sh
    git checkout -b feature/your-feature
    ```
3. Commit your changes:
    ```sh
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```sh
    git push origin feature/your-feature
    ```
5. Open a pull request.



For any questions or feedback, please contact [YashR34](https://github.com/YashR34).
