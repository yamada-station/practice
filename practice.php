<?php
echo 'hello php!' . "\n";

$name = "yamada";
if($name){
  echo "私は　あなたの名前です". "\n";
} else {
  echo "あなたの名前ではありません". "\n";
}

$sum = 0;
for($i = 0; $i <10000; $i++){
  $sum += $i;
}
echo $sum. "\n";

$fruits = array("apple", "orange", "watermelon", "strawberry", "bannana");
foreach($fruits as $fruits){
  echo "$fruits". "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++)
if($i % 5 == 0){
    echo $i. "\n";
}