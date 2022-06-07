<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cooking portal";
$rating1=$_POST['rating'];
$favpart=$_POST['fav'];
$usersuggestion=$_POST['suggestions'];

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO feedback(rating, favorite_part, suggestions)VALUES( '$rating1', '$favpart', '$usersuggestion')";

if(mysqli_query($conn,$sql)) {

    echo  "<script>alert('Your feedback is added to the portal, Thank you for submitting');
		  window.location.href='cookingportalhome.php';
		</script>";
} 
else {
    echo "<script>alert('Your feedback is not added to the portal, Provide feedback');
		  window.location.href='feedback.php';
		</script>";
}
mysqli_close($conn);
?>
