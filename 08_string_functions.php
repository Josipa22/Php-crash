<?php

$string = 'Hello world';
echo strlen($string);
echo strpos($string, 'o');
echo strrpos($string, 'o');
echo strrev($string);
echo strtolower($string);
echo strtoupper($string);
echo ucwords($string);
echo str_replace('Hello', 'Everyone', $string);
echo substr($string, 0, 8);
echo substr($string, 5);

if (str_starts_with($string, 'Hello'))
  echo 'yes';

if (str_ends_with($string, 'ld'))
  echo 'yes';

// $string2 = '<h1>Hello</h1>';
// echo $string;

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf('%s likes to %s', 'Brad', 'code');
printf('1 + 1 = %d', 1 + 1);
