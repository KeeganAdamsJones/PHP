<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD - 440
Module 8
11/22/2021

For this assignment, the database you will use is baseball_01. 
The database ID you will use to log in is student1 and the 
password is pass.

The table you create and populate is to focus on a topic that 
interests you. Using MySQLi, write PHP programs to create and 
populate a DB table to be used in Module 9. 

You will need PHP scripts to:
Create your table           KeeganCreateTable1.php
Drop your table             KeeganDropTable1.php
Populate your table         KeeganPopulateTable1.php
Query to test your table    KeeganQueryTable1.php

Your table is to have a minimum of 5 fields, with more than 
one data type.
-->

<head>Create DB</head>

    <body>
        <h1>Create DB Table in PHP using MySQLi</h1>

        <center>
            <?php
                $lineBreak = '<br />';

                // had to copy the following into msql to allow connection
                // ALTER USER 'student1'@'%' IDENTIFIED WITH mysql_native_password BY 'pass';
                
        
                // Create connection
                $conn = new mysqli('127.0.0.1', 'student1', 'pass', 'baseball_01');  

                // Check connection
                if ($conn->connect_error) {
                   die("The connection failed: " . $conn->connect_error);
                }
                echo "The connection was successful!<br>";

                // Create table
                
                $sql = "CREATE TABLE Birthdays_php(fName CHAR(75) NOT NULL, mName CHAR(75) NOT NULL, lname CHAR(75) NOT NULL, birthday date NOT NULL, phone CHAR(13) NOT NULL, textarea VARCHAR(300) NOT NULL, email CHAR(75) NOT NULL)";
                
                // may need a try/catch around this later
                if ($conn->query($sql) === true) {
                    echo "Table Birthdays_php was successfully created!" . $lineBreak;
                }
                else {
                    echo "There was an error creating your Birthdays_php table." . $conn->error . $lineBreak;
                }
                
                // Close connection
                $conn->close();

            ?>
        </center>
    </body>
</html>