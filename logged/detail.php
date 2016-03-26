<?php 
	include_once('akses.php');
	include_once('../datcon.php');
	include_once('mac.php');

	$user = $_SESSION['username'];

	if (!is_null($_GET['id_pesan'])) {
		$id_pesan = $_GET['id_pesan'];
		$query = "select * from pesan where id_pesan = '$id_pesan'";
		$result = mysql_query($query);
		$pesan = mysql_fetch_array($result);
	}else{
		header("Location: index.php");
	}

	$cekPesan = $pesan['pesan'];

	for($i=0;$i<strlen($cekPesan);$i++)
	{
		$kode[$i]=getIndex($cekPesan[$i],$kamus);
		$decbin[$i]=decbin($kode[$i]);
		$decbiner6[$i]=to6bit($decbin[$i]);
	}

	$onebit=concatenateAll($decbiner6);
	$checkMAC=bitshifting(3,$onebit);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pesan</title>
    <link rel="stylesheet" href="../css/material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
		<div class="mdl-card mdl-shadow--2dp" style="margin:auto;margin-top:10%;">
			<div class="mdl-card__title mdl-color--indigo mdl-color-text--white">Pesan Anda</div>
			<div class="mdl-card__supporting-text">
				<p>Pengirim :
					<?php echo $pesan['pengirim']; ?>
				</p> 
				<p>Pesan :
					<?php echo $pesan['pesan']; ?>
				</p>
				<p>MAC :
					<?php 
						if ($pesan['MAC'] == $checkMAC) {
							echo "MATCH! Your massage is secure";
						}else{
							echo "Your massage has been hacked!!";
						}
						// echo $pesan['MAC'];
						// echo "</br>";
						// echo $checkMAC;
					?>
				</p>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<a href="compose.php?penerima=<?php echo $pesan['pengirim']; ?>" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored">Balas</a href="compose.php?penerima=<?php echo $pesan['pengirim'] ?>">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--red" onclick="self.history.back()">Kembali</button>
			</div>
		</div>
	</div>
	<script src="../js/material.min.js"></script>
</body>
</html>