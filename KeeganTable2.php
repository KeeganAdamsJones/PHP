
<!doctype html>
<html lang="en">

<!-- 
Keegan Jones
CSD 440
10/26/2021
Module 2

Write a program that creates an HTML table using a PHP nested 
loop structure. In the loop structure you are to display a two 
dimensional table holding PHP generated random numbers in each 
cell. Do not use PHP to display the actual table tags. This 
will require several opening and closing PHP tags such as 
<?php ?>.
-->

<head>
</head>

<body>
    <table border='1' width='400'>
        <thead>
            <tr>
                <td colspan='10'>
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
                            echo(rand(1, 10));
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
