<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cooking portal";
$name=$_POST['name1'];
$email=$_POST['email1'];
$psw1=$_POST['psw'];
$choice1=$_POST['choice'];
    $var1="";  
    foreach($choice1 as $var2)  
       {  
          $var1.= $var2.",";  
       }  

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO user(username, email, password, food_preferences)VALUES( '$name', '$email', '$psw1', '$var1' )";

if(mysqli_query($conn,$sql)) {

    echo  "<script>alert('You have successfully signed in, login to the portal to continue');
		  window.location.href='login.php';
		</script>";
} 
else {
    echo "<script>alert('Invalid details, sign up');
		  window.location.href='sign up.php';
		</script>";
}
mysqli_close($conn);
?>
