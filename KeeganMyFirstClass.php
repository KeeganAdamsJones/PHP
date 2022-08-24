<!doctype html>
<html lang="en">

<!--
Keegan Jones
CSD 440
Module 6
11/15/2021

Write a program that defines a class titled MyInteger. 
The class is to hold a single integer that is set in the 
constructor by a parameter. 
The class is to have methods isEven(int) and isOdd(int).
In addition, the class will have an isPrime() method.
Lastly, you are to have a getter and setter method.
Create two instances and test all methods.
-->

<head>
    <title>Class titled KeeganMyInteger</title>   
</head>

<body>
    <h1>Class titled KeeganMyInteger</h1>

    <?php
    $newline = "<br/>";
    
    class KeeganMyInteger {
        public $newline = '<br/>';
        private $integer;
        
        //constructor
        function __construct($integer) {
            $this->integer = $integer;
          }
               
        // function to check if # is even
        public function isEven() {
            if($this->integer % 2 == 0){
                    echo nl2br ("{$this->integer} is an even number.\n"); 
                }
                else{
                    echo nl2br ("{$this->integer} is not an even number.\n");
                }
        }
        

        // function to check if # is odd
        function isOdd() {
            if($this->integer % 2 != 0){
                    echo nl2br ("{$this->integer} is an odd number.\n"); 
                }
                else{
                    echo nl2br ("{$this->integer} is not an odd number.\n");
               }
        }
        


        // function to check if # is prime
        // itterate through to see if #is divisible by 2, 3, 4, 5, 6, ... up to the #
        function isPrime(){
            for($x=2; $x<$this->integer; $x++){
               if($this->integer % $x == 0){
                    echo nl2br("{$this->integer} is not a prime number.\n\n");
                    return false;
		        }  
            }
            echo nl2br ("{$this->integer} is a prime number.\n\n"); 
            return true;
            
        }
    };
    
    
    //give number values to new variables
    $firstNum = new KeeganMyInteger(35);
    $secondNum = new KeeganMyInteger(2);
    $thirdNum = new KeeganMyInteger(42);
    
    // call funtions
    $firstNum->isEven();
    $firstNum->isOdd();
    $firstNum->isPrime();

    $secondNum->isEven();
    $secondNum->isOdd();
    $secondNum->isPrime();
    
    $thirdNum->isEven();
    $thirdNum->isOdd();
    $thirdNum->isPrime();
  
    ?>
</body>

</html>