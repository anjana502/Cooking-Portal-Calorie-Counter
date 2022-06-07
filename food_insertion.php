<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cooking portal";
$name=$_POST['name1'];
$region=$_POST['reg'];
$flavour=$_POST['fav'];
$type1 = $_POST['ft'];

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO food(name, region, flavours, food_type)VALUES( '$name', '$region', '$flavour', '$type1' )";

if(mysqli_query($conn,$sql)) {

    echo  "<script>alert('Your food is successfully added to the portal');
		  window.location.href='retrive_food.php';
		</script>";
} 
else {
    echo "<script>alert('Your food is not added to the portal, Try again');
		  window.location.href='retrive_food.php';
		</script>";
}
mysqli_close($conn);
?>
