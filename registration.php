<!DOCTYPE html>
<html>
<head>
	<title> Registration from</title>
</head>

<?php


?>

<body>


	<h1>Registration Form</h1>
	<h2>Basic Information</h2>
	<?php

		$FirstName= "";
		$LastName = "";
		$DOBE = "";
		$Gender = "";
		$Religion = "";
		$PresentAddress="";
		$ParmanentAddress="";
		$Phone = "";
		$Email = "";
		$Username = "";
		$Password = "";
		$Website = "";
		

		$FirstNameErr= "";
		$LastNameErr = "";
		$DOBErr = "";
		$GenderErr = "";
		$ReligionErr = "";
		$PresentAddressErr="";
		$ParmanentAddressErr="";
		$PhoneErr = "";
		$EmailErr = "";
		$UsernameErr ="";
		$PasswordErr ="";
		$WebsiteErr ="";
		

		

		
		



if( $_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	
	if(empty($_POST['fname'])){
		 $FirstNameErr = "please fill up this properly";
		 
	}
	else{

		$FirstName = $_POST['fname'];
	 

	}
		if(empty($_POST['lname'])){
		$LastNameErr = "please fill up this properly"; 
				
	}
	else{

		$LastName = $_POST['lname'];
		

	}
		if(empty($_POST['dob'])){
		$DOBErr = "please fill up this properly"; 
				 
	}
	else{

		$DOB = $_POST['dob'];
		

	}
		if(empty($_POST['gender'])){
		$GenderErr = "please fill up this properly"; 
				 
	}
	else{

		$Gender = $_POST['gender'];
	

	}

	    if(empty($_POST['religion'])){
		$ReligionErr ="please fill up this properly"; 
	}	

	else{

	
		$Religion = $_POST['religion'];
	}	



		if(empty($_POST['email'])){
		$EmailErr = "please fill up this properly"; 
			
	}
	else{

		$Email = $_POST['email'];


		

	}
	    if(empty($_POST['password'])){
			$PasswordErr = "please fill up this properly";
	}		

	else{

		$Password = $_POST['password'];
	}

		

	}
		if(empty($_POST['Phone'])){
		$PhoneErr = "please fill up this properly"; 
				 
	}
	else{

		$Phone = $_POST['Phone'];
		

	}
		if(empty($_POST['PresentAddress'])){
		$PresentAddressErr = "please fill up this properly"; 
				 
	}
	else{

		$PresentAddress = $_POST['PresentAddress'];
		

	}

	    if(empty($_POST['ParmanentAddress'])){
		
		$ParmanentAddressErr = "please fill up this properly"; 
				 
	}
	else{

		$ParmanentAddress = $_POST['ParmanentAddress'];
		

	}
		// $Speciality = $_POST['Speciality'];


	




?>




<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST">
	<label for = "fname"> Enter your first name </label>
<input type="text" name="fname" id="fname">
<p style='color:red'> <?php echo $FirstNameErr; ?> </p>

<br>

<label for = "lname"> Enter your last name </label>
<input type="text" name="lname" id="lname">
<p style='color:red'> <?php echo $LastNameErr; ?> </p>
<br>

<label for = "dob"> Enter your date of birth </label>
<input type="date" name="dob" id="dob">
<p style='color:red'> <?php echo $DOBErr; ?> </p>
<br>


<label for = "gender"> Gender </label>
<input type="radio" name="gender" id="male" value="male">
<label for = "male"> Male </label>
<input type="radio" name="gender" id="female" value="female">
<label for = "female"> Female </label>
<p style='color:red'> <?php echo $GenderErr; ?> </p>
<br>

<label for = "religion"> Religion </label>
<select </select> type= "religion" name="religion">
	<option value= "Islam">Islam</option>
	<option value= "Hindu">Hindu</option>
	<option value= "Christian">Christian</option>
	<option value= "Other">Other</option>


<label for = "phone"> Phone </label>
<input type="phone" name="phone" id="phone">
<p style='color:red'> <?php echo $PhoneErr; ?> </p>
<br>

<label for = "email"> Email </label>
<input type="email" name="email" id="email">
<p style='color:red'> <?php echo $EmailErr; ?> </p>
<br>

<label for = "username"> Username </label>
<input type="username" name="username" id="username">
<p style='color:red'> <?php echo $UsernameErr; ?> </p>
<br>

<label for = "password"> Password </label>
<input type="password" name="password" id="password">
<p style='color:red'> <?php echo $PasswordErr; ?> </p>
<br>

<label for = "website"> Website </label>
<input type="website" name="website" id="website">
<p style='color:red'> <?php echo $WebsiteErr; ?> </p>
<br>

<label for = "PresentAddress">PresentAddress</label>
<input type="text" name="PresentAddress" id="PresentAddress">
<p style='color:red'> <?php echo $PresentAddressErr; ?> </p>
<br>


<label for = "ParmanentAddress"> ParmanentAddress </label>
<input type="ParmanentAddress" name="ParmanentAddress" id="ParmanentAddress">
<p style='color:red'> <?php echo $ParmanentAddressErr; ?> </p>
<br>


<input type="submit" value="Submit">
</form>
<br>

	?>

	


</body>

</html># Form-Submission
