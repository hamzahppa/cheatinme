<!DOCTYPE html>
<html>
<head>
	<title>Login - Cheat In Me!</title>
    <link rel="stylesheet" href="css/material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
		<div class="mdl-card mdl-shadow--2dp" style="margin:auto;margin-top:10%;">
			<div class="mdl-card__title mdl-color--teal-300 mdl-color-text--white">Login</div>
			<div class="mdl-card__supporting-text">
				<form action="akses/login.php" method="POST">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="username" />
						<label class="mdl-textfield__label">Username</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" name="password" />
						<label class="mdl-textfield__label">Password</label>
					</div>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" type="submit">Sign In</button>
				<a href="akses/register.php" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--red-500">Sign Up</a>
			</div>
				</form>
		</div>
	</div>
	<script src="js/material.min.js"></script>
</body>
</html>