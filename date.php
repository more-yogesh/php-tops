<?php
date_default_timezone_set("Asia/Calcutta");

echo date('Y-m-d') . "<hr/>";
echo date('d-m-Y') . "<hr/>";
echo date('d(D) M,Y') . "<hr/>";

echo "<h1>Convert date</h1>";

$dateMySQL = "2020-02-12 13:30:55";

// echo time();
// echo strtotime($dateMySQL);

// echo date("M, y h:i A", strtotime($dateMySQL));

// echo date_default_timezone_get();


// echo date('d-m-Y h:i:s A')."<hr/>";

//    echo date("d-M-y",mktime(0,0,0,date('d'),date('m'), date('Y')));
$future10Days = mktime(date('h'), date('i'), date('s'), date('m'), date('d') + 10, date('y'));
echo date("l d-m-y", $future10Days);

// echo "Oct 3, 1975 was on a ".date("d-m-Y", mktime(0,0,0,10,3,1975));


