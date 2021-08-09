<html>
<body>
Welcome to <?php 
error_reporting(0); 
echo $_POST["name"];
echo "<br>";

$city = $_POST["name"];

?><br>

<form action="hotel.php" method="post">
<input type="submit" name="submit" value="Hotels" />
<input type="hidden" name="pk" value="<?php echo $city; ?>">
</form>

<form action="restuarent.php" method="post">
<input type="submit" name="submit" value="Restuarents" />
<input type="hidden" name="pk" value="<?php echo $city; ?>">
</form>

<form action="" method="post">
<input type="submit" name="submit" value="Flights" />
<input type="hidden" name="pk" value="<?php echo $city; ?>">
</form>

<form action="" method="post">
<input type="submit" name="submit" value="Vacation Rentals" />
<input type="hidden" name="pk" value="<?php echo $city; ?>">
</form>

<form action="" method="post">
<input type="submit" name="submit" value="Rental Car" />
<input type="hidden" name="pk" value="<?php echo $city; ?>">
</form>

<form action="thingsToDo.php" method="post">
<input type="submit" name="submit" value="Things to do" />
<input type="hidden" name="pk" value="<?php echo $city; ?>">
</form>

</body>
</html>