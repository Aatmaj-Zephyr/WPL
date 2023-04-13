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

$db = new mysqli("localhost","root","") or die("What is a server?");

#$query = "Create Database emailTest;";
#$db->query($query);


$query = "use emailTest;";
$db->query($query);

#$query = "Create Table mytable (gmail varchar(17),password varchar (17));";
#$db->query($query);

$query = "insert into mytable(gmail,password) values ('".$e."','".$p."');";
$db->query($query);

$query = "select * from mytable";
$result = $db->query($query);

while($row=$result->fetch_assoc()){
  echo "mail is " . $row['gmail'] . " Password is " . $row['password'] ." ...<br>";
}
$db->close();
?>
