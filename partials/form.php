<?php
?>

<aside>

	<div class='form-wrapper'>

		<?php
		if (isset($_SESSION['id'])) {
			echo "<h2 id='logout'>Welcome, Dear: ".$_SESSION['username']."</h2>
			<a href='logout.php'><input type='submit' name='logout' value='Log Out'></a>";

		} else {
			echo "
		<form action='login.php' id='login' name='login' method='post'>
			<h2>Login</h2>
			<input type='text' name='username' placeholder='User Name' required>
			<input type='password' name='password' placeholder='Password' required>
			<input type='submit' name='loginSubmit' value='Log In'></form>

		<form action='signup.php' id='register' method='post'>

			<h2>Register New Account </h2>
			<input type='text' name='first' placeholder='First Name' required>
			<input type='text' name='last' placeholder='Last Name' required>
			<input type='text' name='username' placeholder='User Name' required>
			<input type='email' name='email' placeholder='Email'
			       pattern=' ^ \w + ([.-]?\w +)*@\w + ([.-]?\w +)*(.\w{
				2,3})+$' required>
			<input type='password' name='password' placeholder='Password' required>

			<input type='submit' name='insert' value='Register'>

		</form>
		";
		} ?>
	</div>

</aside>