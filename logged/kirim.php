<?php 
	include_once('akses.php');
	include_once('../datcon.php');
	include_once('mac.php');

	$pengirim = $_SESSION['username'];
	$penerima = $_POST['penerima'];
	$pesan = $_POST['pesan'];
	$id_pesan = $pengirim.date('Y-m-d-H:s');

	for($i=0;$i<strlen($pesan);$i++)
	{
		$kode[$i]=getIndex($pesan[$i],$kamus);
		$decbin[$i]=decbin($kode[$i]);
		$decbiner6[$i]=to6bit($decbin[$i]);
	}

	$onebit=concatenateAll($decbiner6);
	$MAC=bitshifting(3,$onebit);


	$query = "insert into pesan (id_pesan, pesan, pengirim, penerima, state, MAC) values ('$id_pesan','$pesan','$pengirim','$penerima','$state','$MAC')";
	if (mysql_query($query)) {
		header("Location: outindex.php");
	}
?>