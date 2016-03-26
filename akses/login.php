<?php  
	session_start();
	include_once("../datcon.php");
	if (isset($_POST['Register'])) {
		$username = $_POST['Register']['username'];
		$password = $_POST['Register']['password'];
		$nama = $_POST['Register']['nama'];
		$goldar = $_POST['Register']['goldar'];
		$query = "insert into akun (username, password, status, nama, goldar) values ('$username','$password','1','$nama','$goldar')";
		$register = mysql_query($query);
		if ($register) {
			header("Location: /cheatinme/index.php");
		}
	}else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select * from akun where username = '$username' and password = '$password'";
		$result = mysql_query($query);
		if (mysql_num_rows($result) == 1) {
			$data = mysql_fetch_array($result);
			$_SESSION['status'] = $data['status'];
			$_SESSION['username']=$data['username'];
			$_SESSION['nama']=$data['nama'];
			if ($_SESSION['status'] == 1) {
				header("Location: /cheatinme/logged/index.php");
			}
		}
		else{
			header("Location: /cheatinme/index.php");
		}
	}
?>