<?php
/*
Template Name: login
*/

global $USER_ID;
global $wpdb;

if(!$USER_ID){
	if ($_POST) {
         //wpdb escape its use for security purpose 
		$username = $wpdb->escape($_POST['username']);
		$password = $wpdb->escape($_POST['password']);

		$login_array = array();
		$login_array['user_login'] = $username;
		$login_array['user_password'] = $password;
		$verify_user = wp_signon($login_array,true);
		if (!is_wp_error($verify_user)) {
				
				echo "<script>window.location = '".site_url()."'</script>";

		}else{
                echo "<p>inavalid credentials</p>";
		}

		
	}else{	
  //user in logged Out state
get_header();
	?>
   <form method="post">
   	<p>
   	<label for="username">username/email</label>
   	<input type="text" id="username" name="username" placeholder="enter username/email"/>
   </p>
   <p>
   	<label for="password">password</label>
   	<input type="password" id="password" name="password" placeholder="enter password"/>
   </p>
   <p>
   	<button type="submit" name="btn_submit">Login</button>
   </p>
   </form>


	<?php
   get_footer();
		
	}
	

}else{
	//user in logged in 
}







?>