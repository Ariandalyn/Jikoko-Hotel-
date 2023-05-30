# Jikoko Hotel System


This is a hotel system web application built using PHP and HTML. It allows users to view and order food items from the hotel's menu.

## Installation

To install and set up the Jikoko Hotel System, follow these steps:

1. Clone the repository by running the following command in your terminal or command prompt:
   This will create a local copy of the repository on your machine.

2. Set up a local web server or use a development environment like XAMPP to host the application.

3. Place the project files in the appropriate web server directory. The exact location may vary depending on your web server configuration. For example, if you're using XAMPP, you can place the files in the `htdocs` directory.

4. Access the application by visiting the URL where it is hosted. This will typically be something like `http://localhost/Hotel/index.php`.

5. Navigate to the project directory using the `cd` command:

## SQL Import Instructions

1. Download the SQL file: [https://github.com/Ariandalyn/Jikoko-Hotel-/raw/main/connect.php]

2. Install MySQL: If you don't have MySQL installed, download and install it from the (https://dev.mysql.com/downloads/).

3. Create a new database: Open a MySQL client, such as phpMyAdmin or MySQL Workbench, and create a new database named `hotel_db`.

4. Import the SQL file:

   - Open your MySQL client and connect to the MySQL server using the provided configuration:

     ```php
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "hotel_db";
     $conn = new mysqli($servername, $username, $password, $db);

     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ```

   - Locate the import feature or option in your MySQL client's interface.

   - Choose the SQL file from your computer and initiate the import process.

   - Wait for the import to complete.

5. Verify the import: Use your MySQL client to check if the SQL file was imported successfully into the `hotel_db` database.

6. Usage instructions: Provide any additional instructions on how to use the imported SQL data or any relevant information for the project.

7. Credits: If applicable, mention the source or credits for the SQL file.

8. Troubleshooting: If users encounter any issues during the import process or while using the imported data, provide troubleshooting steps or direct them to relevant resources.

## Database Import Instructions

1. Download the SQL file: [hotel_db.sql](path/to/sql/file/hotel_db.sql)

2. Install the required database management system: If you haven't already, ensure that you have the necessary database management system installed to import the database. For example, if you are using MySQL, download and install MySQL from the official website: [MySQL Downloads](https://dev.mysql.com/downloads/)

3. Create a new database: Open your database management system and create a new database with an appropriate name for your project. Take note of the database name for the next step.

4. Import the database:

   - Open a terminal or command prompt.
   - Navigate to the directory where you have the SQL file saved.
   - Use the following command to import the SQL file into the newly created database:

     ```bash
     mysql -u [username] -p [database_name] < hotel_db.sql
     ```

     Replace `[username]` with your database username and `[database_name]` with the name of the database you created in the previous step. You will be prompted to enter your database password.

   - Wait for the import to complete. Depending on the size of your SQL file and the server performance, this may take a while.

5. Verify the import: Connect to your database using your preferred database client and confirm that the database and its tables have been imported successfully.

6. Usage instructions: Provide any additional instructions on how to use the imported database or any relevant information for the project.

7. Credits: If applicable, mention the source or credits for the database file.

8. Troubleshooting: If users encounter any issues during the import process or while using the imported database, provide troubleshooting steps or direct them to relevant resources.

## Usage

1. Launch the application by accessing the URL where it is hosted.
2. Explore the homepage to get an overview of the hotel and its offerings.
3. Navigate to the "Food Menu" section to view the available food items.
4. Each food item includes an image, price, and rating.
5. Use the "Enter quantity" input to specify the desired quantity.
6. Click the "View" button to view more details about the food item.
7. Repeat steps 4-6 for other food items of interest.
8. Follow the instructions to complete the order process.

## Contributing

We welcome contributions to enhance the functionality or fix issues of this project. To contribute, follow these steps:

1. Fork the repository.
   git clone https://github.com/Ariandalyn/your-forked-repo.git

2. Create a new branch:
3. Make your changes and test thoroughly.
4. Commit your changes:
5. Push to the branch:
6. Submit a pull request.

## License

This project is licensed under the (LICENSE).

## Contact

For any questions or suggestions, feel free to reach out to us at [magdaarianda@gmail.com].
