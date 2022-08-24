<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD 440
Module 7
11/22/2021

*Write a form program that prompts a user to enter seven 
different fields of data, using a minimum of four different 
data type entries.
*When the form is submitted to your PHP CGI, you are then to 
verify all fields were populated and the data was correctly entered.
*Then, in your return, display the data entered in a well formatted page, otherwise you will return an error display to report the problem.
*Title all files starting with your first name such as <YourFirstName> Form.php. Examples:
    JohnForm.php
    JohnForm.html
    SueResponse.php
    LarryReply.php
    Etc.
-->

<head>
    <title>Keegan Form</title>
</head>

<body bgcolor="#d9f2e6">
    <center>
    <h1>Keegan's Form</h1>

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
        
    ?>
    </center>

</body>

</html>