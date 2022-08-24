
<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD 440 - Server Side Scripting
11/2/2021
Module 4 Assignment
--> 

<head>
	<title>Palindrome Checker</title>
</head>

<body>
	<h1>Keegan's Palindrome Checker<h2>

    <?php
        //function using (strrev) to check for palindrome
        function Palindrome($string){ 
            if (strrev($string) == $string){ 
            return 1; 
            }
            else{
                return 0;
            }
        } 

        // Use function to check if string is a palindrome
        $original = "DAD";
        echo "The word in correct order is: ".$original;
    ?>
    </br>
    <?php
        echo "The word in reverse order is: ".strrev($original); 
    ?>
    </br>
    <?php
        if(Palindrome($original)){ 
            echo $original.": is a palindrome!"; 
        }
        else { 
        echo $original.": is not a palindrome."; 
        }
    ?> 
    </br>
    </br>
    <?php
        // Use function to check if string is a palindrome
        $original = "COW";
        echo "The word in correct order is: ".$original;
    ?>
    </br>
    <?php
        echo "The word in reverse order is: ".strrev($original); 
    ?>
    </br>
    <?php
        if(Palindrome($original)){ 
            echo $original.": is a palindrome!"; 
        }
        else { 
        echo $original.": is not a palindrome."; 
        }
    ?>

    </br>
    </br>
    <?php
        // Use function to check if string is a palindrome
        $original = "MOM";
        echo "The word in correct order is: ".$original;
    ?>
    </br>
    <?php
        echo "The word in reverse order is: ".strrev($original); 
    ?>
    </br>
    <?php
        if(Palindrome($original)){ 
            echo $original.": is a palindrome!"; 
        }
        else { 
        echo $original.": is not a palindrome."; 
        }
    ?>

    </br>
    </br>
    <?php
        // Use function to check if string is a palindrome
        $original = "DOG";
        echo "The word in correct order is: ".$original;
    ?>
    </br>
    <?php
        echo "The word in reverse order is: ".strrev($original); 
    ?>
    </br>
    <?php
        if(Palindrome($original)){ 
            echo $original.": is a palindrome!"; 
        }
        else { 
        echo $original.": is not a palindrome."; 
        }
    ?>

    </br>
    </br>
    <?php
        // Use function to check if string is a palindrome
        $original = "POP";
        echo "The word in correct order is: ".$original;
    ?>
    </br>
    <?php
        echo "The word in reverse order is: ".strrev($original); 
    ?>
    </br>
    <?php
        if(Palindrome($original)){ 
            echo $original.": is a palindrome!"; 
        }
        else { 
        echo $original.": is not a palindrome."; 
        }
    ?>

    </br>
    </br>
    <?php
        // Use function to check if string is a palindrome
        $original = "RAT";
        echo "The word in correct order is: ".$original;
    ?>
    </br>
    <?php
        echo "The word in reverse order is: ".strrev($original); 
    ?>
    </br>
    <?php
        if(Palindrome($original)){ 
            echo $original.": is a palindrome!"; 
        }
        else { 
        echo $original.": is not a palindrome."; 
        }
    ?>
</body>

</html>