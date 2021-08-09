<?php
$name = $_POST["name"];
$psw = $_POST["psw"];

error_reporting(0);
$host = "localhost"; 
$user = "postgres"; 
$pass = "123"; 
$db = "tripAdvisor"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");

$query = "SELECT * FROM login"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

$flag = 0;
while ($row = pg_fetch_row($rs)) {
  $a = 0;
  if(strcmp($name,$row[0])==$a && strcmp($psw,$row[1])==$a)
  {
   echo "login successful \n";
   $flag = 1;
   break;
  }
}
if($flag == 0)
{
echo "login failed. Go back. ";
}
else
{

echo '
 <html>
<body>


<form action="newCity.php" method="post">
Enter city: <input type="text" name="name" required><br>
<input type="submit">
</form>

</body>
</html>';

}
pg_close($con); 
?>
