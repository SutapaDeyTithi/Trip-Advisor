<?php 
error_reporting(0); 
$host = "localhost"; 
$user = "postgres"; 
$pass = "123"; 
$db = "tripAdvisor"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");

$query = "select *
from atrractions
"; 


$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

echo "List of places";
echo "<br>";

while ($row = pg_fetch_row($rs)) {
  $flag = strcmp($row[0], $_POST["pk"]);
  $a = 0;
  if($flag == $a)
  {
  echo "$row[1]";
  echo "<br>";
  }
}
pg_close($con); 

?>