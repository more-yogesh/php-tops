<?php
/*
if(condition) #<- true
{
    #code   
} 
else #<- false 
{
    #code
}
*/
#next code execute


$age = 17;
// if ($age > 17) {
//     echo "you are eligible";
// } else {
//     echo "condiction is false";
// }
// echo "Hello all";


if ($age > 17) {
    echo "you are eligible";
} else if ($age == 17) {
    echo "Try next year";
} else {
    echo "You are not eligible";
}
