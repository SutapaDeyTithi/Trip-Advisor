<html>
<body>
Welcome to <?php 
error_reporting(0); 
echo $_POST["name"];
echo "<br>";
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
  $flag = strcmp($row[2], $_POST["name"]);
  $a = 0;
  if($flag == $a)
  {
  echo "$row[0]";
  echo "<br>";
  }
}

$query2 = "SELECT * FROM restuarent";

$rs2 = pg_query($con, $query2) or die("Cannot execute query: $query2\n");

echo "List of restuarents";
echo "<br>";

while ($row2 = pg_fetch_row($rs2)) {

  $flag2 = strcmp($row2[2], $_POST["name"]);
  $a = 0;
  if($flag2 == $a)
  {
  echo "$row2[1]";
  echo "<br>";
  }
}
pg_close($con); 

?><br>
</body>
</html>