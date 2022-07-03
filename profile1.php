
<?php  require "connect.php"; ?>

 <?php 
session_start();

echo  $_SESSION['Name'];

?>

<?php
if(isset($_POST['submit'])) {
$fullName        = $_POST['full_name'];
$PhoneNumber       = $_POST['Phone_number'];
$post_image        = ($_FILES['file']['name']);
$post_image_temp   = ($_FILES['file']['tmp_name']);
$Universtiys         = $_POST['Universtiy'];
$educationLevel      = $_POST['education_level'];
$Biographys       = $_POST['Biography'];

move_uploaded_file($post_image_temp, "../img/$post_image" );
$query = "INSERT INTO profile(full_name	, Phone_number,Universtiy, education_level, Biography,Personal_image)
VALUES('$fullName', '$PhoneNumber', '$Universtiys', '$educationLevel', '$Biographys','$post_image')"; 
 if(mysqli_query($conn,$query)){
    header('Location:profile2.php');
  
}     
}?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?php  echo  $_SESSION['Name'];?></title>
    <link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="form-basic.css">
</head>
<body>


<div class="main-content">
<form class="form-basic" method="post" enctype="multipart/form-data">

    <div class="form-title-row">
        <h1>Profile data </h1>
    </div>

    <div class="form-row">
        <label>
            <span>Please full name</span>
            <input type="text" name="full_name">
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>Phone number</span>
            <input type="Text" name="Phone_number">
        </label>
    </div>




    <div class="form-row">
        <label>
            <span>University</span>
            <input type="Text" name="Universtiy">
        </label>
    </div>
    

    <div class="form-row">
        <label>
            <span>education level</span>
            <input type="text" name="education_level">
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>Biography</span>
            <textarea name="Biography"></textarea>
        </label>
    </div>

    <div class="form-row">
        <label>
        <span>Personal image</span>
         <input type="file" name="file">
</label>
    </div>

   
    <input  type="submit" name="submit" value="Submit">
        
    </div>

</form>

</div>



</body>
</html>