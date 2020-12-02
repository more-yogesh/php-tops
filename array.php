<?php

/**
 * 1. Numeric Array
 * 2. Associative Array
 * 3. Multi Dimensional Array
 */

$classA  = [
    'vijay',
    'ajay',
    'neha',
    'jaya',
    'sumsham',
    'sabki',
    'pasand',
    'ghadi',
    'sudhir'
];
$classB  = [
    'vijay',
    'ajay',
    'neha',
    'jaya',
    'sumsham',
    'sabki',
    'pasand',
    'ghadi',
    'Test Student'
];

print_r($classA[0]);

$top5BatsMan = [
    'Virat' => 100,
    'sachin' => 350,
    'kohli' => 120,
    'tendulakr' => 130,
    'sehwag' => 500
];

// echo "<pre>";print_r($top5BatsMan['sachin']);


$multi = [
    'A' => ['sachin', 'vk', 'vvs', [100, 200, 500]],
    'B' => 'Tommy',
    'C' => ['pruthvi', 'abd']
];

echo "<pre>";
print_r($multi['A'][3][2]);


// foreach ($classA as $key => $value) {
//     // echo "Bats Man Name:" . $key;
//     echo "Bats Man score:" . $value;
//     echo "<hr/>";
// }

// echo "Total".array_sum($top5BatsMan);

print_r(array_keys($top5BatsMan));
print_r(array_values($top5BatsMan));


// print_r(array_chunk($classA, 3));

// print_r(array_diff($classA, $classB));


// print_r(array_flip($top5BatsMan));

$bats[] = array_map(function ($student) {
    return "Mr." . $student;
}, $classA);

print_r($bats);


// print_r(array_pop($classA));

// array_push($classA, 'majon Kumar');
// print_r($classA);

// print_r(array_rand($top5BatsMan));

// array_reduce();

// print_r(array_slice($classA, 0, 3));
$colors = ["red", "green", "yellow"];
array_splice($colors, 0, 0, "Pink");

// print_r($colors);

// asort($classA);

// arsort($classA);

// echo count($classA);

// print_r($classA);


if (in_array("purple", $colors)) {
    echo "Yes we have";
}


// echo date('y-m-D');

echo time();