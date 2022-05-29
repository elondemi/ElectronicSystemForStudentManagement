<?php
$a[] = "qwertyuio";
$a[] = "12345678";
$a[] = "asdfghjkl";
$a[] = "password1";
$a[] = "iloveu123";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = "its in hacker DB";
      } else {
          $hint ="";
      }
    }
  }
}
echo $hint === "" ? "Nice pw" : $hint;
?>
