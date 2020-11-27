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
    'ghadi'
];

print_r($classA[0]);

$top5BatsMan = [
    'Virat' => 100,
    'sachin' => 350,
    'kohli' => 120,
    'tendulakr' => 130,
    'sehwag' => 5000
];

// echo "<pre>";print_r($top5BatsMan['sachin']);


$multi = [
    'A' => ['sachin', 'vk', 'vvs', [100, 200, 500]],
    'B' => 'Tommy',
    'C' => ['pruthvi', 'abd']
];

echo "<pre>";
print_r($multi['A'][3][2]);


foreach ($classA as $key => $value) {
    // echo "Bats Man Name:" . $key;
    echo "Bats Man score:" . $value;
    echo "<hr/>";
}
