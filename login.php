<?php
include_once("shared/head.php");
?>

<div id= "welcome">
	<h1> Welcome to Food Saviour! </h1>
	<button id= "signUp">Sign Up</button>
	<button id= "logIn">Log In</button>
</div>

<form class="bg-white" action="process-login.php" method="post">
	<div>
		<label for="email">Email: </label>
		<input type="email" id="email" name="email" required />
	</div>
	<div>
		<label for="pass">Password: </label>
		<input type="password" id="pass" name="pass" required />
	</div>
	<button>Log In</button>
</form>

<form class="bg-white" action="process-signup.php" method="post">
	<div>
		<label for="firstName">First name: </label>
		<input type="text" id="firstName" name="firstName" />
	</div>
	<div>
		<label for="lastName">Last Name: </label>
		<input type="text" id="lastName" name="lastName" />
	</div>
	<div>
		<label for="username">Username: </label>
		<input type="text" id="username" name="username" required />
	</div>
	<div>
		<label for="email">Email: </label>
		<input type="email" id="email" name="email" required />
	</div>
	<div>
		<label for="pass">Password: </label>
		<input type="password" id="pass" name="pass" required />
	</div>
	<div>
		<label for="pass">Confirm Password: </label>
		<input type="password" id="pass" name="pass" required />
	</div>
	<button>Sign Up</button>
</form>

<?php
include_once("shared/footer.php");
?>
