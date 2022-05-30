<?php
require __DIR__. '/resources/query_handler/StudentRepository.php';
$test = new StudentRepository();
$eni = $test->selectname();

// $arr = ["endrit"];
// $eni.array_push($arr);


$hint = "";
$q = $_REQUEST["q"];
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  
  foreach($eni as $name) {
    if (stristr($q, substr($name, 0, $len))) {
        if ($hint === "") {
            $hint = $name;
          } else {
            $hint .= ", $name";
          }
    }
  }
}
echo $hint === "" ? "No suggestion" : $hint;
?>
