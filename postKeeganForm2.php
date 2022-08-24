<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD 440 - Server Side Scripting
11/29/2021
Module 9 Assignment

For this assignment the database you will use is the one created 
in Module 8. 

Using MySQLi, write PHP programs that provide:
Index page with links to all following PHPs
Query page to search based on user form input
Form page for adding a record

All pages need to be well formatted in their display.
--> 

<head>
	<title>Module 9 Assignment</title>
</head>

<body bgcolor="#d9f2e6">
    <center>
    <h1>Keegan's Add a Birthday Record Form</h1>

    <?php
    // define variables and set to empty values
    $fnameErr = $mnameErr = $lnameErr = $birthdayErr = $phoneErr = $textareaErr = $emailErr = "";
    $fname = $mname = $lname = $birthday = $phone = $textarea = $email = "";

    
        try {
            $fname = $_POST["fname"];
            if($fname == null) {
                print("<br><br>***** Please Enter a First Name! *****");
            }
            else {
                print("<br><br>First Name: $fname<br /");
            }

            $mname = $_POST["mname"];
            if($mname == null) {
                print("<br><br>***** Please Enter a Middle Name! *****");
            }
            else {
                print("<br><br>Middle Name: $mname");
            }

            $lname = $_POST["lname"];
            if($lname == null) {
                print("<br><br>***** Please Enter a Last Name! *****");
            }
            else {
                print("<br><br>Last Name: $lname");
            }

            $birthday = $_POST["birthday"];
            if($birthday == null) {
                print("<br><br>***** Please Enter a Birthday! *****");
            }
            else {
                print("<br><br>Birthday: $birthday");
            }

            $phone = $_POST["phone"];
            if($phone == null) {
                print("<br><br>***** Please Enter a Phone Number! *****");
            }
            else {
                print("<br><br>Phone: $phone");
            }

            $textarea = $_POST["textarea"];
            if($textarea == null) {
                print("<br><br>***** Please Enter an Address! *****");
            }
            else {
                print("<br><br>Address: $textarea");
            }

            $email = $_POST["email"];
            if($email == null) {
                print("<br><br>***** Please Enter an Email Address! *****");
            }
            else {
                print("<br><br>Email: $email");
            }
        }
        catch(Exception $e) {
            //Error here
            print("<h1>something went wrong</h1>");
      
        }

        try {
            // Create connection

            $conn = new mysqli('localhost', 'student1', 'pass', 'baseball_01');  

            // Check connection
            if ($conn->connect_errno) {
                die("The connection failed: " . $conn->connect_error);
            }
            echo "The connection was successful!<br>";
           
            //this will insert new record into database 
            $conn->query("INSERT INTO Birthdays_php(fname, mname, lname, birthday, phone, textarea, email) " +
            "VALUES ('${fname}', '${mname}', '${lname}', '${birthday}', '${phone}','${textarea}', '${email}')");
            

        }
        catch(Exception $f) {

        }
        
    ?>
    </center>

</body>
</html>
