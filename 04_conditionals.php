<?php

$age = 16;

// if ($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'Not old enough to vote';
// }

$t = date("H");

// if ($t < 12) {
//   echo 'Good morning';
// } else if ($t >= 12 && $t < 17) {
//   echo 'Good afternoon';
// } else {
//   echo 'Good evening';
// }

$posts = ['First post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No posts';
// }

// echo !empty($posts) ? $posts[0] : 'No posts';

// $first_post = !empty($posts) ? $posts[0] : 'No posts';
// echo $first_post;

// $first_post = $posts[0] ?? null;
// echo $first_post;

$fav_color = 'red';

switch ($fav_color) {
  case 'red':
    echo 'Your fav color is red';
    break;
  case 'blue':
    echo 'Your fav color is blue';
    break;
  default:
    echo 'Your fav color is not red or blue';
}
