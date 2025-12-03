<?php 
   $n = $_REQUEST["num"] ?? 0;
   $a = $n - 1;
   $s = $n + 1;
   echo "O numero escolhido foi $n";
   echo "<br>P seu antecessor é $a";
   echo "<br>O seu sucessor é $s"
?>