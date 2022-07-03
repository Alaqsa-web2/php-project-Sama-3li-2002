
<?php   
session_start();
require "connect.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title> User Profile </title>
		<link rel="stylesheet" href="style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<!--Bootstrap 5 css-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="form-basic.css">
	</head>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Poppins',sans-serif;
		}
		body{
			background-image: url('college.jpg');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 100vh;
		}
		.profile-card{
			width: 516px;
			margin: auto;
			margin-top: 12px;
			margin-bottom: 12px;
			background: #ffffffd9;
			border-radius: 10px;
			opacity: 0.98;
			font-weight: 800;
			box-shadow: 2px 4px 10px 2px rgba(0, 0, 0, 0.5);
			position: relative;
		}
		.image-container{
			position: relative;
		}
		.image-container img{
			width: 29%;
			border-radius: 50%;
			margin-top: 15px;
			margin-left: 190px;
			height: 152px;
		}
		.title{
			position: absolute;
			left: 183px;
			top: 170px;
			font-size: 17px;
			font-weight: 700;
			color: #292525;
			text-shadow: #FC0 1px 0  10px;
		}
		.main-container{
			padding: 32px 20px 20px 20px;
		}
		.info{
			color: black;
			margin-right: 16px;
			padding: 14px;
		}
		.skills{
			background-color: green;
			border-radius: 16px;
			opacity: 0.45;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.bar{
			padding: 0.05rem 12px;
			border-radius: 16px;
			text-align: center;
			color: white;
			background-color: blue;
			opacity: 1;
		}
		.btn{
			padding: 10px;
			margin-top: 9px;
			margin-bottom: 8px;
			background-color: #164a40;
			color: white;
			width: 65px;
			outline: none;
			border-radius: 7px;
			cursor: pointer;
			margin-left: 12px;
		}
		.about{
			border: 2px solid gray;
			border-radius: 7px;
			margin-left: 12px;
			display: none;

		}
		.about img{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			margin-left: 12px;
			margin-top: 4px;
		}
		.about p{
			padding: 12px;
			margin-top: 0px;
			margin-left: 13px;
			font-family: 'Lobster',cursive;
			font-size: 17px;
		}
		.about h3{
			margin-left: 14px;
			text-decoration: underline;
		}
		.btn:hover{
			background-color: #39524d;
		}
		.follow p{
			color: black;
			font-size: 18px;

		}
		.social-media{
			margin-top: 12px;
			margin-left: 12px;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.fa-facebook{
			background: #034ce6;
			color: white;
			border-radius: 50%;
			padding: 12px;
		}
		.fa-twitter{
			background: #0878ce;
			color: white;
			border-radius: 50%;
			padding: 12px;
		}

        .fa-instagram{
			background: #d0092f;
			color: white;
			border-radius: 50%;
			padding: 12px;
		}
         .fa-youtube{
			background: #d20606;
			color: white;
			border-radius: 50%;
			padding: 12px;
		}
		.fab:hover{
		opacity: 0.7;
		cursor: pointer;
	}
	</style>
	
<body>
<div class="profile-card">
<?php 
// $Id = $_SESSION['user_id'];
$query = "SELECT * FROM profile ";
         $select_profile = mysqli_query($conn,$query);  
         while($row = mysqli_fetch_assoc($select_profile)){
    
        $full_name       = $row['full_name'];
        $Phone_number   = $row['Phone_number'];
        $Universtiy    = $row['Universtiy'];
        $education_level  = $row['education_level'];
        $Biography     = $row['Biography'];
        $Personal_image    = $row['Personal_image'];
		?>
	
	 <?php echo "<div class='image-container'>
                        <img src= '../img/$Personal_image ' alt='faild'>
                    </div>"; ?> 

		<div class="title">
			<h2> <?php echo $full_name ; ?></h2>
		</div>
	
		
     
       

	<div class="main-container">
		<p><i class="fa fa-home info"></i> <?php echo $full_name ; ?></p>
		<p><i class="fa fa-university info"></i> <?php echo $Universtiy ; ?></p>
		<p><i class="fa fa-envelope info"></i> <?php echo $Biography ; ?></p>
		<p><i class="fa fa-phone info"></i> <?php echo $Phone_number ; ?></p>

		</div>
	
        <?php  } ?>


</div>


<div class="main-content">
<form class="form-basic" method="post" enctype="multipart/form-data" action="add_post.php">

    <div class="form-title-row">
        <h1>Type Your Post here </h1>
    </div>

    <div class="form-row">
        <label>
            <span>Title</span>
			<input type="text"  name="title" required  >
        </label>
    </div>


    <div class="form-row">
        <label>
            <span>Status</span>
			<select class=custom-select name="post_status">
           <option value="published">Published</option>
           <option value="draft">Draft</option>
         </select>
        </label>
    </div>



    <div class="form-row">
        <label>
            <span>Tags</span>
            <input type="text"  name="post_tags">
        </label>
    </div>

	<div class="form-row">
        <label>
        <span>Personal image</span>
		<input type="file" name="file">
</label>
    </div>


   

    <div class="form-row">
        <label>
            <span>content</span>
            <textarea name="post_content"></textarea>
        </label>
    </div>

    
    <input  type="submit" name="create" value="creat a new post">
        
    </div>
  

</form>

</div>

</body>

</html>

