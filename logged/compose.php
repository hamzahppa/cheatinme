<?php 
	include_once('akses.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tulis Pesan - Cheat In Me!</title>
    <link rel="stylesheet" href="../css/material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
		<div class="mdl-card mdl-shadow--2dp" style="margin:auto;margin-top:10%;">
			<div class="mdl-card__title mdl-color--teal-300 mdl-color-text--white">Tulis Pesan</div>
			<div class="mdl-card__supporting-text">
				<form action="kirim.php" method="POST">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="penerima" <?php  
							if (isset($_GET['penerima'])) {
								echo "value = '".$_GET['penerima']."'";
							}else{
								echo "";
							}
						?> required>
						<label class="mdl-textfield__label">Penerima</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="pesan" required/>
						<label class="mdl-textfield__label">Pesan</label>
					</div>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" type="submit">Kirim</button>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" type="reset">Reset</button>
			</div>
				</form>
		</div>
	</div>
	<script src="../js/material.min.js"></script>
</body>
</html>