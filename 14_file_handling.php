<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
  // echo readfile($file);

  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));

  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Jopa' . PHP_EOL . 'Deja' . PHP_EOL . 'Tina';
  fwrite($handle, $contents);
  fclose($handle);
}
