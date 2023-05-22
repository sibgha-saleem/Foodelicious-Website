

<?php
error_reporting(0);
ini_set('display_errors', 0); 
$res1 = 0;
$res2 = 0;
$connection = mysqli_connect("localhost","root","","foodelicous");
if (!$connection) 
{ die("Connection failed: " . mysqli_connect_error()); }
       
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT `id` FROM `food` WHERE `username` = '$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

         
if($count >= 1) {
         $res1 = 1; 
header("Location:register.php?res=$res1");
}
else {
echo $query = "INSERT INTO `food` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')"; 

echo $res2 = mysqli_query($connection, $query); 
header("Location:login.php?res=$res2");}
?>
 
