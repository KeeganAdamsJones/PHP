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
	<h1>Keegan Module 9 Index Page<h2>

	<!-- If I did the links in HTML:
	<a href="KeeganQuery.php">Search</a>
    <a href="KeeganForm.php">Add a Record</a>
	-->

    <?php
		$lineBreak = '<br />';

		echo "<a href='KeeganQuery.php'>Search</a><br>";
		
        echo "<a href='KeeganForm.php'>Add a Record</a>";
	?>
</body>

</html>



