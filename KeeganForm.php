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

<body>
	<h1>Keegan Module 9 Form Page to Add a Record<h2>

    <h2>Keegan's Birthday Form</h2>

    <form action='postKeeganForm2.php' method='post'>
        <!-- First Name -->
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        
        
        <!-- Middle Initial -->
        <label for="mname">Middle name:</label>
        <input type="text" id="mname" name="mname"><br><br>

        <!-- Last Name -->
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>

        <!-- Birthday -->
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br><br>
        
        <!-- Phone # -->
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required>
        <small>Format: 123-456-7890</small><br><br>
        
        <!-- Address -->
        <label for='textarea'>Address:</label>
        <textarea id="textarea" name="textarea" rows='6' cols='50'></textarea><br><br>
        
        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <!-- Submit Button -->
        <input type="submit" value="Submit">

      </form>

	
    
</body>

</html>
