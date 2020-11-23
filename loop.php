<?php

// for ($i = 2; $i <= 20; $i = $i + 2) {
//     #code
//     if ($i == 8) {
//         echo "<b>$i</b>/>";
//     } else {
//         echo  "$i<hr/>";
//     }
// }

// for ($num = 1; $num <= 5; $num++) {
//     // echo "$num<br/>";
//     for ($star = 1; $star <= $num; $star++) {
//         echo "*";
//     }
//     echo "<br/>";
// }

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}





/*
x
xx
xxx
xxxx
xxxxx

    x
   xx
  xxx
 xxxx
xxxxx


  x  
  xx
  xxx
 xxxx
 xxxxx

*/

// echo " condition is complete";


$cricketers = [
    'sachin' => 100,
    'sehwag' => 250,
    'dhoni' => 150,
    'kohli' => 0,
    'anushka' => 600
];

foreach ($cricketers as $key => $value) {
    echo $key." = ".$value."<hr/>";
}
