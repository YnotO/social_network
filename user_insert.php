<?php
		include("includes/connection.php");
		//if sign up button is pressed
		if(isset($_POST['sign_up'])){
			$name = mysqli_real_escape_string ($con,$_POST['u_name']);
			$pass = mysqli_real_escape_string ($con,$_POST['u_pass']);
			$email = mysqli_real_escape_string ($con,$_POST['u_email']);
			$country = mysqli_real_escape_string ($con,$_POST['u_country']);
			$gender = mysqli_real_escape_string ($con,$_POST['u_gender']);
			$b_day = mysqli_real_escape_string ($con,$_POST['u_birthday']);
			$name = mysqli_real_escape_string ($con,$_POST['u_name']);
			$stts = mysqli_real_escape_string ($con,"unverified");
			$postss = mysqli_real_escape_string ($con,"No");
			//checks if the email already existist in the system
			$get_email = "select * from users where user_email='$email'";
			$run_email = mysqli_query($con,$get_email);
			$check = mysqli_num_rows($run_email);
			//if email validation
			if ($check==1) {
				echo "<script>alert('This email is already registered!, Try another one')</script>";
				exit();
			}
			//password properties string length 
			if(strlen($pass)<8){

				echo "<script>alert('Password should be minimum 8 characters')</script>"; 
				exit();
			}
			else {
				//inserting user input into the database
				$insert = "INSERT INTO users (user_name,user_pass,user_email,user_country,user_gender,user_bday,user_image,register_date,last_login,stts,postss) VALUES ('$name','$pass','$email','$country','$gender','$b_day','default.jpg',NOW(),NOW(),'$stts','$postss')";

				$run_insert = mysqli_query($con,$insert);
					//script 
					if($run_insert){
						$_SESSION['user_email']=$email;
						echo "<script>alert('Registration Successfull!')</script>";
						echo "<script>window.open('home.php','_self')</script>";
					} 
			}

		}

?>