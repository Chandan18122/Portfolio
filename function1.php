<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'portfolio');

// variable declaration
$name	  = "";
$email    = "";
$subject  = "";
$message  = "";
$errors   = array(); 

// call the contact() function if contact_btn is clicked
if (isset($_POST['contact_btn'])) {
	contact();
}

// contact function
function contact(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $name,$email,$subject,$message;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$name   =  e($_POST['name']);
	$email       =  e($_POST['email']);
	$subject  =  e($_POST['subject']);
	$message  =  e($_POST['message']);

	// form validation: ensure that the form is correctly filled
	if (empty($name)) { 
		array_push($errors, "Full name is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($message)) { 
		array_push($errors, "message is required"); 
	}
	// contact detail if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO contact (	 `name`, `email`, `subject`, `message`) 
			  VALUES('$name', '$email', '$subject', '$message')";
		if (mysqli_query($db, $query)){
			echo "<script>alert('Contact details send successfully!'); window.location='index.php'</script>";
		} else {
			echo "<script>alert('contact details has not send successfully!!'); window.location='contact.php'</script>";
		}		
	}
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}
//for ddisplay error
function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
