<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>

 <?php

 $errors=array();
 if(isset($_POST['submit'])){

//checking required fields
$req_fields = array('first_name'=>50, 'last_name'=>50,'email'=>50,'password'=>40);

	foreach($max_len_fields as  $field=>$max_len){

		if(strlen(trim($_POST[$field]))>$max_len){
 		$errors[]=$field . ' must be lss than' . $max_len . 'characters';
  
 	}

	}

		//checking max lenth
	$max_len_fields = array('first_name', 'last_name','email','password');

	foreach($req_fields as $field){

		if(empty(trim($_POST[$field]))){
 		$errors[]=$field . ' is required';

 	}

	}  
 
 } 
 
 ?>


<!DOCTYPE html>
<htm lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New User</title> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="appname"> User Management System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['first_name'];?>! <a href="logout.php">Log Out</a></div>



	</header>
	

<main>

	
 <h1>Add New User<span> <a href="users.php"> < Back to user list </a></span></h1>

 <?php

if(!empty($errors)){

	echo '<div class="errmsg">';
	echo '<b>there were error(s) on your form.</b><br>';
	foreach($errors as $error){
		echo  '- ' . $error . '<br>';
	}
	echo '</div>';


}

?>

<form action="add-user.php" method="post" class="userform">
	<p>
		<label for="">First Name:</label>
		<input type="text" name="first_name">

	</p>

	<p>
		<label for="">Last Name:</label>
		<input type="text" name="last_name" >

	</p>

	<p>
		<label for="">Email Address:</label>
		<input type="email" name="email" >

	</p>

	<p>
		<label for="">New Password:</label>
		<input type="password" name="password" >

	</p>

	<p>
		 <label for="">&nbsp;</label>
		 <button type="submit" name="submit">Save</button>
	</p>

</form>


</main>

</body>
</html>
