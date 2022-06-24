<?php
$numbers = [1, 44, 15];
$fruits = array('apple', 'orange');

// print_r($numbers);
// var_dump($numbers);

// echo $fruits[1];

// $colors = [
//   1 => 'red',
//   4 => 'blue',
//   6 => 'green'
// ];

// $hex = [
//   'red' => 'f00',
//   'blue' => '0f0',
//   'green' => '00f'
// ];

// echo $hex['blue'];

// $person = [
//   'first_name' => 'Josipa',
//   'last_name' => 'Krizanac',
//   'email' => 'jops@gmail.com'
// ];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Josipa',
    'last_name' => 'Krizanac',
    'email' => 'jops@gmail.com'
  ],
  [
    'first_name' => 'Andreja',
    'last_name' => 'Vugdelija',
    'email' => 'dejs@gmail.com'
  ],
  [
    'first_name' => 'Mirna',
    'last_name' => 'Golem',
    'email' => 'mims@gmail.com'
  ]
];

echo $people[1]['email'];
var_dump(json_encode($people));
