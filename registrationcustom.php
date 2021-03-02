<?php
/*
Template Name: registrationcustom
*/
get_header();
global $wpdb;
if ($_POST) {
	$username = $wpdb->escape($_POST['txtusername']);
	$email = $wpdb->escape($_POST['txtemail']);
	$password = $wpdb->escape($_POST['txtpassword']);
	$cpassword = $wpdb->escape($_POST['textconfirmpassword']);
	$error = array();
	//check username have space
	if(strpos($username, ' ') !==FALSE){
		$error['username_space'] = "Username has space";
	}
	//check username is empty
	if(empty($username)){
		$error['username_empty'] = "needed username must";
	}
	if (username_exists($username)) {
		$error['username_exists'] = "username already exists";
	}
	//verify that email is valid or not

	if (!is_email($email)) {
		$error['email_valid'] = "email has not valid";
	}
	//check whether email is exists or not
	if (email_exists($email)) {
		$error['email_existence']  = "email is already exists";
	}
	if (strcmp($password,$cpassword) !==0) {
		 $error['password'] = "password did'nt matched";
	}
     if (count($error) == 0) {
     	 wp_create_user($username,$password,$email);
     	 echo "user created successfully";
     	 exit();
     }else{
     	print_r($error);
     	echo "not working";
     }
}

?>


<form method="post">
	<p>
		<label>Enter Username</label>
		<div>
			<input type="text" name="txtusername" id="txtusername" placeholder="username"/>
		</div>
	</p>
	<p>
		<label>Enter email</label>
		<div>
			<input type="email" name="txtemail" id="txtemail" placeholder="email"/>
		</div>
	</p>
	<p>
		<label>Enter Password</label>
		<div>
			<input type="password" name="txtpassword" id="txtpassword" placeholder="password"/>
		</div>
	</p>
	<p>
		<label>Enter Confirm Password</label>
		<div>
			<input type="password" name="textconfirmpassword" id="textconfirmpassword" placeholder="confirm password"/>
		</div>
	</p>
	<input type="submit" name="btnsubmit"/>
</form>

<?php get_footer(); ?>