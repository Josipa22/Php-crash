<?php

// for ($x = 0; $x <= 10; $x++) {
//   echo 'Number ' . $x . '<br>';
// }

// $x = 1;

// while ($x <= 15) {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// }

// $x = 6;

// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while ($x <= 5);

$posts = ['Firstpost', 'Secondpost', 'Thirdpost'];

// for ($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach ($posts as $index => $post) {
//   echo $index + 1 . ' - ' . $post . '<br>';
// }

$person = [
  'first_name' => 'Josipa',
  'last_name' => 'Krizanac',
  'email' => 'jops@gmail.com'
];

foreach ($person as $key => $value) {
  echo "$key - $value<br>";
}
