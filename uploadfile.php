<?php
include_once 'loginconnection.php';
if(isset($_POST['upload']))
{   
$name = $_POST['name1'];     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="recipe_uploads/";
 
 
 $new_size = $file_size/1024;  

 
 
 $new_file_name = strtolower($file);
 
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO recipe_upload(username,file_name,file_type,file_size) VALUES('$name','$final_file','$file_type','$new_size')";
  if (mysqli_query($con,$sql)) {
	echo  "<script>alert('Your recipe is successfully uploaded');
		  window.location.href='cookingportalhome.php';
		</script>";
  }
  else {
	echo  "<script>alert('Your recipe is not uploaded, upload recipe');
		  window.location.href='upload.php';
		</script>";
  }
        
  
 }
 else
 {
  
  echo  "<script>alert('We have encountered a problem in uploading your recipe, please upload after some time');
		  window.location.href='upload.php';
		</script>";
		
		}
	}
?>