<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cooking portal";
$name=$_POST['chname'];
$region=$_POST['reg'];
$contact1=$_POST['chcon'];

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO chef_details(name, region, contact)VALUES( '$name', '$region', '$contact1' )";

if(mysqli_query($conn,$sql)) {

    echo  "<script>alert('The chef details are successfully added to the portal');
		  window.location.href='retrive_chef.php';
		</script>";
} 
else {
    echo "<script>alert('The chef details are not added to the portal, Try again');
		  window.location.href='retrive_chef.php';
		</script>";
}
mysqli_close($conn);
?>
