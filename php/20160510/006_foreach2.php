<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello',4=>4,'C'=>'ああああ'];
var_dump($a);
echo "<br/>";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br/>";
}
?>
