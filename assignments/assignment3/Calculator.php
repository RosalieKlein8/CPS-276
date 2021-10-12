<?php
    
    class Calculator {

        // Operator Functions

        public function add(){
            return ($this -> num1) + ($this -> num2);
        }
    
        public function subtract(){
            return ($this -> num1) - ($this -> num2);
        }
    
        public function multiply(){
            return ($this -> num1) * ($this -> num2);
        }
    
        public function divide() {
            return ($this -> num1) / ($this -> num2);
        }

        // Calculator Function 

        public function calculator($operator=NULL, $num1=NULL, $num2=NULL) {
            
            if ($operator==NULL || $num1==NULL && $num2==NULL) {
                return 'The function is null.'.'<br>';
            }

            else {
                switch($operator) {
                    case '+':
                        return "The sum of the numbers is " .$num1 + $num2.'.<br>';
                        break;
                    case '-':
                        return "The difference of the numbers is " .$num1 - $num2.'.<br>';
                        break;
                    case '*':
                        return "The product of the numbers is ".$num1 * $num2.'.<br>';
                        break;
                    case '/':
                        if($num2==0) {
                            return 'You cannot divide by zero.'.'<br>';
                        } 
                        else {
                            return "The division of the numbers is " .$num1 / $num2.'.<br>';}
                            break;
                    default:
                        return 'Invalid.';
                }
            }
        }
    }
?>

<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>

</head>

<body>

</body>

</html>
