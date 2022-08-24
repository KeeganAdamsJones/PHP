<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD 440 - Server Side Scripting
12/06/2021
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

<body bgcolor="#d9f2e6">
    <center>
    <h1>Keegan's Birthday Record</h1>
    <div style="border:1px;text-align:left; width:50%;">
    <?php
        $newLine='<br />';

        try {
            $JSONbody = json_encode($_POST,JSON_PRETTY_PRINT);
            // use the pre tag to allow pre format of the pretty to work
            //(html was messing up the pretty output)
            echo "<pre>" . $JSONbody . "</pre>";
             
        }
        catch(Exception $e) {
            //Error here
            print("<h1>something went wrong</h1>");
        }        
    ?>
    </div>
    </center>
 

</body>
</html>
