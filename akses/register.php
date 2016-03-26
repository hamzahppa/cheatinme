<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register - Cheat In Me!</title>
    <link rel="stylesheet" href="../css/material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
		<div class="mdl-card mdl-shadow--2dp" style="margin:auto;margin-top:5%;">
			<div class="mdl-card__title mdl-color--red-300 mdl-color-text--white">Register</div>
			<div class="mdl-card__supporting-text">
				<form action="login.php" method="POST">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="Register[nama]" />
						<label class="mdl-textfield__label" >Nama Lengkap</label>
					</div>					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<select class="mdl-textfield__input" name="Register[golongan]">
							<option value="O" selected="">O</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
						</select>
						<label class="mdl-textfield__label" >Golongan Darah</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="Register[username]" />
						<label class="mdl-textfield__label" >Username</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" name="Register[password]" />
						<label class="mdl-textfield__label" >Password</label>
					</div>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" type="submit">Register</button>
			</div>
				</form>
		</div>
	</div>
	<script src="../js/material.min.js"></script>
</body>
</html>