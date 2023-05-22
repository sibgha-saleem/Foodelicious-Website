
<?php
$connection = mysqli_connect("localhost","root","","foodelicous");
if (!$connection) 
{ die("Connection failed: " . mysqli_connect_error()); }
       

$table = $_POST['table'];
$username = $_POST['username'];
$comment = $_POST['comment'];

echo $query = "INSERT INTO `$table` (`username`, `comment`) VALUES ('$username', '$comment')"; 

echo $res2 = mysqli_query($connection, $query); 
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
 