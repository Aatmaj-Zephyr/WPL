<?php
$p = $_POST["p"];
$e=$_POST["e"];
echo "PHP up and running!";
   if( strpos($e,'.@')==null){
 echo "!! email invalid";
 }
 $pattern = ".[0-9].";
 
  if( preg_match($pattern,$p)==0){
 echo "!! password must contain numbers";
 }
if (strlen($p) < "7") {
  echo "!! Password too short";
}
?>
