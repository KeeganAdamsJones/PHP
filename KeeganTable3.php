<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD - 440
Module 3
11/2/2021

A function that is placed in an external file, that will be used to generate the 
value to be displayed in each cell. The function will take two random numbers as 
the parameters and will then return the sum. 
-->

<head>
    <title>Keegan's Table of Random Number Sums</title>
</head>

<body>
    <table border='1' width='400'>
        <thead>
            <tr>
                <td colspan='8'>
                    Random Numbers
                </td>
            </tr>
        </thead>
        <!-- Nested for loop to output random numbers on table. -->
        <tbody>
            <?php
                for($i = 0; $i < 10; ++$i) {
                ?>
                <tr>
                    <?php
                        for($j = 0; $j < 10; ++$j) {
                        ?>
                        <td>
                            <?php
                            require_once "functionsPHP.php";
                            echo sum(1,10);
                                
                            ?> 
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>

</html>
