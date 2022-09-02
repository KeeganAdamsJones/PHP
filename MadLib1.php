
<!doctype html>
<html lang="en">

<!--
Keegan Jones
9/2/22

--> 

<head>
	<title>Mad Lib</title>
</head>

<body>
    <form action="MadLib1.php" method="get">

        Adjective: <input type="text" name="adjective1"> <br>;
        Plural Noun: <input type="text" name="pluralNoun1"><br>;
        Name of Person: <input type="text" name="nameOfPerson1"><br>;
        Adjective: <input type="text" name="adjective2"><br>;
        Plural Noun: <input type="text" name="pluralNoun2"><br>;
        Number: <input type="text" name="number1"><br>;
        Name of Friend: <input type="text" name="friendsName"><br>;
        Verb Ending in -ing: <input type="text" name="verbEndingInIng"><br>;
        Adjective: <input type="text" name="adjective3"> <br>;
        <input type="submit">;

    </form>

    <?php
        $adjective1 = $_GET["adjective1"];
        $pluralNoun1 = $_GET["pluralNoun1"];
        $nameOfPerson1 = $_GET["nameOfPerson1"];
        $adjective2 = $_GET["adjective2"];
        $pluralNoun2 = $_GET["pluralNoun2"];
        $number1 = $_GET["number1"];
        $friendsName = $_GET["friendsName"];
        $verbEndingInIng = $_GET["verbEndingInIng"];
        $adjective3 = $_GET["adjective3"];
        
        
        echo "I love spring, it is very $adjective1.";
        echo "My favorite thing about spring is the $pluralNoun1.";
        echo "Every spring, $nameOfPerson1, and I watch the $adjective2 flowers bloom.";
        echo "We plant a garden of $pluralNoun2 and wait $number1 of days to see them bloom.";
        echo "I also love $verbEndingInIng in muddy puddles after a fresh rain, with my friend, $friendsName.";
        echo "We get to wear our $adjective3 rain boots and splash each other with mud.";
        echo "I love spring!"
    ?> 
</body>

</html>