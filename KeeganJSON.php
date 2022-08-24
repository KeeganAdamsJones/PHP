<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD 440 - Server Side Scripting
12/6/2021
Module 10 Assignment

Assignment:
Write a form program that prompts a user to enter a minimum of
8 different fields of data.

When the form is submitted to your PHP CGI, use the function 
json_encode to encode your data into a JSON format.

Then, in your return, display the data in the JSON format 
inside a well-formatted output display, otherwise you will 
return an error display to report the problem.

Title all files starting with your first name such as 
<YourFirstName> JSON.php.
--> 

<head>
	<title>Module 10 Assignment</title>
</head>

<body>
	<h1>Keegan Module 10 Form Page to Add a Record<h2>

    <h2>Keegan's Birthday Form</h2>

    <form action='postKeeganJSON.php' method='post'>
        
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
        <input type="email" id="email" name="email"><br><br>

        <!-- Relationship -->
        <label for="relationship">Choose a relationship type:</label>

        <select name="relationship" id="relationship">
            <option value="family">Family</option>
            <option value="friend">Friend</option>
            <option value="acquaintance">Acquaintance</option>
        </select>

        <!-- Submit Button -->
        <input type="submit" value="Submit">

      </form>

	
    
</body>

</html>
