
<?php
$style = "css/welcome.css";
include_once("shared/head.php");
?>

<div id= "welcome">
	<h1> Welcome to Food Saviour! </h1>
	<button id= "signUp" class="btn-outline">Sign Up</button>
	<button id= "logIn" class="btn-outline">Log In</button>
</div>

<section id="login" class="hide">
	<h2>Login</h2>
	<form action="process-login.php" method="post">
		<div>
			<label for="loginEmail">Email: </label>
			<input type="email" id="loginEmail" name="loginEmail" placeholder="email@example.com" required />
		</div>
		<div>
			<label for="loginPass">Password: </label>
			<input type="password" id="loginPass" name="loginPass" placeholder="Must have at least 6 characters" required />
		</div>
		<button class="btn-outline">Log In</button>
	</form>
</section>

<section id="signup" class="hide">
	<h2>Sign Up</h2>
	<form action="process-signup.php" method="post">
		<div>
			<label for="signupFirstName">First name: </label>
			<input type="text" id="signupFirstName" name="signupFirstName" placeholder="John" />
		</div>
		<div>
			<label for="signupLastName">Last Name: </label>
			<input type="text" id="signupLastName" name="signupLastName" placeholder="Doe" />
		</div>
		<div>
			<label for="signupUsername">Username: </label>
			<input type="text" id="signupUsername" name="signupUsername" placeholder="JohnDoe" required />
		</div>
		<div>
			<label for="signupEmail">Email: </label>
			<input type="email" id="signupEmail" name="signupEmail" placeholder="email@example.com" required />
		</div>
		<div>
			<label for="signupPass">Password: </label>
			<input type="password" id="signupPass" name="signupPass" placeholder="Must have at least 6 characters" required />
		</div>
		<div>
			<label for="signupPassConfirm">Confirm Password: </label>
			<input type="password" id="signupPassConfirm" name="signupPassConfirm" placeholder="Retype your password" required />
		</div>
		<button class="btn-outline">Sign Up</button>
	</form>
</section>
<?php
include_once("shared/footer.php");
?>
