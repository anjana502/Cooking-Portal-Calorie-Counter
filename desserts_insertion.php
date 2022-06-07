<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cooking portal";
$id=$_POST['foodid'];
$name=$_POST['dname'];
$region=$_POST['reg'];
$flavour=$_POST['fav'];

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO desserts(food_id, name, region, flavours)VALUES( '$id', '$name', '$region', '$flavour' )";

if(mysqli_query($conn,$sql)) {

    echo  "<script>alert('Your dessert is successfully added to the portal');
		  window.location.href='retrive_desserts.php';
		</script>";
} 
else {
    echo "<script>alert('Your dessert is not added to the portal, Try again');
		  window.location.href='retrive_desserts.php';
		</script>";
}
mysqli_close($conn);
?>
