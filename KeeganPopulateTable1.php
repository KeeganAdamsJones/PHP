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


<head>Populate Table</head>

<body>
<h1>Populate DB Table in PHP using MySQLi</h1>

    <center>
        <?php
            $lineBreak = '<br />';

            // Create connection
            $conn = new mysqli('127.0.0.1', 'student1', 'pass', 'baseball_01');  

            // Check connection
            if ($conn->connect_error) {
            die("The connection failed: " . $conn->connect_error);
            }
            
            echo "Birthdays" . $lineBreak;

            mysqli_query($conn, "INSERT INTO Birthdays_php(fname, mname, lname, birthday, phone, textarea, email) VALUES ('Keegan', 'Lyn', 'Jones', '1982-11-13', '417-365-9333','25756 State Hwy. 247, Aurora, MO. 65605', 'keeganadamsjones@gmail.com')");
            echo "Keegan" . $lineBreak;

            mysqli_query($conn, "INSERT INTO Birthdays_php(fname, mname, lname, birthday, phone, textarea, email) VALUES ('Nellie', 'Brooklyn', 'Jones', '2012-08-08', '417-365-9333','25756 State Hwy. 247, Aurora, MO. 65605', 'nelliejones@gmail.com')");
            echo "Nellie" . $lineBreak;

            mysqli_query($conn, "INSERT INTO Birthdays_php(fname, mname, lname, birthday, phone, textarea, email) VALUES ('Olivia', 'Grace', 'Jones', '2013-08-30', '417-365-9333','25756 State Hwy. 247, Aurora, MO. 65605', 'oliviajones@gmail.com')");
            echo "Olivia" . $lineBreak;

            mysqli_query($conn, "INSERT INTO Birthdays_php(fname, mname, lname, birthday, phone, textarea, email) VALUES ('Gayla', 'Jean', 'Bural', '1962-04-08', '913-530-1119','22223 Waters Edge Dr., Shell Knob, MO. 65747', 'gaylabural@gmail.com')");
            echo "Gayla" . $lineBreak;

            mysqli_query($conn, "INSERT INTO Birthdays_php(fname, mname, lname, birthday, phone, textarea, email) VALUES ('William', 'Brent', 'Adams', '1957-09-18', '620-260-6178','2004 Old Manor, Garden City, KS.  67846', 'adamsfamily6@sbcglobal.net')");
            echo "Bill" . $lineBreak;
            
            // Close connection
            $conn->close();

        ?>
    </center>
</body>

</html>