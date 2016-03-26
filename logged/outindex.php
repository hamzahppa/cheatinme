<?php
	include_once('akses.php');
	include_once('../datcon.php');
	include_once('mac.php');

	$user = $_SESSION['username'];

	$query = "select * from pesan where pengirim = '$user'";
	$result = mysql_query($query);
	$cekResult = mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cheat In Me!!</title>
    <link rel="stylesheet" href="../css/material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
		<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col" style="margin:auto;margin-top:5%;">
			<div class="mdl-card__title mdl-color--indigo mdl-color-text--white">
				<h4>Pesan Keluar</h4>
				<div class="mdl-layout-spacer"></div>
				<button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">more_vert</i>
				</button>

				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
				  <li class="mdl-menu__item" style="border-bottom:1px solid grey">Username: <?php echo $user ?></li>
				  <li class="mdl-menu__item"><a href="index.php">Pesan Masuk</a></li>
				  <li class="mdl-menu__item" style="border-bottom:1px solid grey"><a href="outindex.php">Pesan Keluar</a></li>
				  <li class="mdl-menu__item"><a href="../akses/logout.php">Logout</a></li>
				</ul>
				<!-- <p><?php echo $user; ?></p> -->
			</div>
			<div class="mdl-card__supporting-text">
			<?php 
				if (mysql_num_rows($result)== 0) {
					echo "
						<p>Sepertinya belum ada Pesan!!</p>
						<p>Kamu bisa memulai dengan Klik tombol Tulis dibawah ini</p>
					";
				}else{
					// print_r($pesan);
					// echo $pesan['pesan'];
					echo "
						<table class='mdl-data-table mdl-js-data-table mdl-shadow--4dp' style='margin:auto;'>
						  <thead>
						    <tr>
						      <th class='mdl-data-table__cell--non-numeric'>Pesan</th>
						      <th class='mdl-data-table__cell--non-numeric'>Kepada</th>
						      <th class='mdl-data-table__cell--non-numeric'>Alert</th>
						    </tr>
						  </thead><tbody>
					";
					while ( $row = mysql_fetch_array($result)) {
						$cekPesan = $row['pesan'];
						for($i=0;$i<strlen($cekPesan);$i++)
						{
							$kode[$i]=getIndex($cekPesan[$i],$kamus);
							$decbin[$i]=decbin($kode[$i]);
							$decbiner6[$i]=to6bit($decbin[$i]);
						}

						$onebit=concatenateAll($decbiner6);
						$cekMAC=bitshifting(3,$onebit);
						echo "
						    <tr>
						      <td class='mdl-data-table__cell--non-numeric'><a href='detail.php?id_pesan=".$row['id_pesan']."'>".$row['pesan']."</a></td>
						      <td class='mdl-data-table__cell--non-numeric'>".$row['penerima']."</td>";
						if ($cekMAC != $row['MAC']) {
							echo "
								<td class='mdl-data-table__cell--non-numeric'><span class='material-icons mdl-badge' data-badge='!'></span></td>
							    </tr>
							";
						}else{
							echo "
								<td class='mdl-data-table__cell--non-numeric'></td>
							    </tr>
							";
						}
					}
					echo "<tbody></table>";
				}
			?>

			</div>
			<div class="mdl-card__actions mdl-card--border">
				<!-- <a href="akses/register.php" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored">Balas</a> -->
				<a href="compose.php" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--red-500">Tulis</a>
			</div>
		</div>
	</div>
	<script src="../js/material.min.js"></script>
</body>
</html>