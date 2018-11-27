<?php
include_once("shared/head.php");
?>
<form class="bg-white" action="process-login.php" method="post">
	<div>
		<label for="email">Email: </label>
		<input type="email" id="email" name="email" />
	</div>
	<div>
		<label for="pass">Password: </label>
		<input type="password" id="pass" name="pass" />
	</div>
	<button>Log In</button>
</form>

<?php
include_once("shared/footer.php");
?>