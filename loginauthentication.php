<?php      
    include('loginconnection.php');  
    $email = $_POST['email1'];  
    $password = $_POST['psw'];  
      
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select email, password from user where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
	
	if($count == 1){  
	    echo "<script>alert('You have logged in successfully');
		  window.location.href='cookingportalhome.php';
		</script>";
            
        }  
        else{  
            echo "<script>alert('Sign up to the portal');
		  window.location.href='signup.php';
		</script>";  
        }    
?>  