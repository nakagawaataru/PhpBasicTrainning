<?php
$a = ['PHP', 'JAVA', 'MYSQL','LINUX' , 'TEL'];

foreach ( $a as $key => $value) {
  echo $key ."". $value ."<br/>";
}
$a[5]="研修";
foreach ( $a as $key => $value) {
  echo $key ."". $value ."<br/>";
}

?>
