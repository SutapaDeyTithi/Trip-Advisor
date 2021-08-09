<?php 
error_reporting(0); 
$host = "localhost"; 
$user = "postgres"; 
$pass = "123"; 
$db = "tripAdvisor"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");

$query = "SELECT * FROM hotel"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

echo "List of hotels";
echo "<br>";
while ($row = pg_fetch_row($rs)) {
  $flag = strcmp($row[2], $_POST["pk"]);
  $a = 0;
  if($flag == $a)
  {
  echo "$row[0]";
  echo "<br>";
  }
}
pg_close($con); 

?>