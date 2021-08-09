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

/*while ($row = pg_fetch_row($rs)) {
  echo "$row[0] $row[1] $row[2]\n";
}*/

pg_close($con); 

?>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
