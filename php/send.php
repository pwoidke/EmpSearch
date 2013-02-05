<?php
$name = $_POST['name'];
$email = $_POST['email'];
$startYear = $_POST['startYear'];
$endYear = $_POST['endYear'];
$memory = $_POST['memory'];
$message = $_POST['message'];

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $startYear + " to " + $endYear;
echo "<br>";
echo $memory;
echo "<br>";
echo $message;
echo "<br>";
?>
