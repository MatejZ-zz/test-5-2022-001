<?php

$array = ['Apple', 'Orange', 'Lemon', 'Banana', 'Kiwi', 'Avocado', 'Elderberry'];

$i = 1;
foreach ($array as $value) {
  echo 'Fruit nr.' . $i . ': ' . $value . '<br>';
  $i = $i + 1;
}
echo '<br>';
sort($array);
$i = 1;

foreach ($array as $value) {
  echo '$value[0] = ' . $value[0] . '<br> ';
  if (in_array($value[0], ['A', 'E', 'I', 'O', 'U'])) {
    echo 'Fruit nr.' . $i . ': ' . $value . '<br>';
    $i = $i + 1;
  }
}

$AssocArry = [
  'key' => 1,
  'key2' => 2,
];

arsort($AssocArry);
$k = array_keys($AssocArry);
var_dump($k);
echo $k[0];
