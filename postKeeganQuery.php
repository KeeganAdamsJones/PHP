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
	<h1>Keegan Module 9 Search Page<h2>

	<table><tr>
        <td>First Name</td>
        <td>Middle Name</td>
        <td>Last Name</td>
        <td>Birthdate</td>
    </tr></table>
    <?php
        

        try {
            // Create connection

            $conn = new mysqli('localhost', 'student1', 'pass', 'baseball_01');  

            // Check connection
            if ($conn->connect_errno) {
                die("The connection failed: " . $conn->connect_error);
            }
            echo "The connection was successful!<br>";
           
            $sql = "SELECT * FROM Birthdays_php";
            // TODO: Consider making this so that it can search
            // by other fields
             $where_clause = " WHERE fname like '" + $_POST['fname'] + "';";
            
             $sql += $where_clause;
            
            $resultset = $conn->query($sql);
            if($resultset->num_rows > 0) {
                while ($row = $resultset->fetch_assoc()) {

                    ?>
                    <tr>
                    <td> <?php echo($row['fname']); ?></td>
                    <td> <?php echo($row['mname']); ?></td>
                    <td> <?php echo($row['lname']); ?></td>
                    <td> <?php echo($row['birthday']); ?></td>
                    </tr>
                
                    <?php
                }
            }

        }
        catch(Exception $f) {

        }
	?>
</body>

</html>