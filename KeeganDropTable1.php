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


<head>Drop Table</head>

<body>
<h1>Drop DB Table in PHP using MySQLi</h1>

</body>
    <center>
        <?php
            $lineBreak = '<br />';

            // Create connection
            $conn = new mysqli('127.0.0.1', 'student1', 'pass', 'baseball_01');  

            // Check connection
            if ($conn->connect_error) {
            die("The connection failed: " . $conn->connect_error);
            }
            echo "The connection was successful!<br>";

            // Drop if the table already exists
            if ($conn) {
                $sql = 'DROP TABLE Birthdays_php';
            }
            if ($conn->query($sql) === TRUE){
                echo "Table Birthdays_php was dropped." . $lineBreak;
            }
            else {
                echo "There was an error dropping your Birthdays_php table." . $conn->error . $lineBreak;
            }
            // Close connection
            $conn->close();

        ?>
    </center>
</body>

</html>