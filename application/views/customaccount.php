<?php
include "header.php";

if (empty($_SESSION['account_username'])) {
	header('location: home.php');
}

$checkdata = mysqli_query($conn, "SELECT * FROM user WHERE username = '$_SESSION[account_username]'");
$check = mysqli_fetch_array($checkdata);



if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['account_username']);
	window . location . href = 'Home';
}

if (isset($_POST['updatedata'])) {
	$username = mysqli_real_escape_string($conn, $_POST['user_name']);
	$frontname = mysqli_real_escape_string($conn, $_POST['nama_depan']);
	$lastname = mysqli_real_escape_string($conn, $_POST['nama_belakang']);
	$email = mysqli_real_escape_string($conn, $_POST['email_user']);
	$jeniskelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);

	if ($username == $_SESSION["account_username"] && $fullname == $_SESSION["account_frontname"] && $email == $_SESSION["account_email"] && $phonenumber == $_SESSION["account_phonenumber"] && $address == $_SESSION["account_address"]) {
?>
		<script>
			alert('So, you pressed the update button, huh? I see what you did, lol.');
			window.location.href = 'customaccount.php';
		</script>

		<?php
	} else {
		$update = mysqli_query($conn, "UPDATE `user` SET username='$username', Nama_Lengkap='$fullname', email='$email', No_Telepon='$phonenumber', Updated_at=now(), Alamat='$address' WHERE ID_User='$check[ID_User]'");



		if ($update) {
			session_destroy();

			session_start();

			$checkdatasecond = mysqli_query($conn, "SELECT * FROM user WHERE ID_User='$check[ID_User]'");
			$checksecond = mysqli_fetch_array($checkdatasecond);
			$_SESSION["account_id"] = $checksecond["ID_User"];
			$_SESSION["account_username"] = $checksecond["username"];
			$_SESSION["account_password"] = $checksecond["password"];
			$_SESSION["account_userlevel"] = $checksecond["userlevel"];
			$_SESSION["account_userstatus"] = $checksecond["userstatus"];
			$_SESSION["account_fullname"] = $checksecond["Nama_Lengkap"];
			$_SESSION["account_email"] = $checksecond["email"];
			$_SESSION["account_phonenumber"] = $checksecond["No_Telepon"];
			$_SESSION["account_address"] = $checksecond["Alamat"];
			$_SESSION["account_create"] = $checksecond["Created_at"];
			$_SESSION["account_update"] = $checksecond["Updated_at"];


		?>
			<script>
				alert('Update data success.');
				window.location.href = 'customaccount.php';
			</script>

<?php
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<style>
		form {
			width: 50%;
			margin-left: 25%
		}

		.input-element {
			font-size: 100px; // for say a select
			width: 400px;
		}

		textarea {
			resize: none;
		}
	</style>

	<title>Custom Account | SI Gadget</title>
</head>

<body>


	<?php
	function endsWith($string, $endString)
	{
		$len = strlen($endString);
		if ($len == 0) {
			return true;
		}
		return (substr($string, -$len) === $endString);
	}


	if (endsWith($check['username'], "s"))
		echo "<h2 style='text-align: Center;'>$check[username]' Account</h2>";
	else
		echo "<h2 style='text-align: Center;'>$check[username]'s Account</h2>";
	?>

	<form method="POST" action="customaccount.php" enctype="multipart/form-data">

		Username : <input type="text" name="username" value="<?php echo $check['username'] ?>" placeholder="Enter Username" Required>
		<br><br>
		Nama Lengkap : <input type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $check['Nama_Lengkap'] ?>" Required>
		<br><br>
		Email : <input type="text" name="email" placeholder="Enter Email" value="<?php echo $check['email'] ?>" Required>
		<br><br>
		Nomor Telepon : <input type="text" name="phonenumber" placeholder="Enter Email" value="<?php echo $check['No_Telepon'] ?>" Required>
		<br><br>
		Alamat (Max 100 Karakter) : <textarea name="address" placeholder="Enter Address" rows="8" cols="50" maxlength="100"><?php echo $check['Alamat'] ?></textarea>
		<br><br>

		<input type="submit" name="updatedata" value="Update Data">


		<br><br>
		<input type="button" value="Change Password" onclick="location.href='Bagian David/changepassword.php'" />
		<br><br>
		<input type="button" value="Delete Account" onclick="location.href='Bagian David/deleteaccount.php'" />
		<br><br>
		<input type="button" value="Back" onclick="location.href='home.php'" />
	</form>
	<br><br>


	<!--Footer adalah Kaki website, Footer biasa sebagai "Informasi tambahan yang bersifat penting dan yang harus
    ditempatkan di setiap halaman", Footer isinya bisa apa saja, yang memang penting-->
	<div class="newsletter">
		<p class="animate__animated animate__fadeInDown" style="text-align:center; color:white; font-size: 15px; position: relative; right: 200px">Mari berlangganan newsletter untuk mendapatkan informasi terbaru
			<input class="animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="text" id="email" name="Email" size="60">
			<input class="button animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="submit" value="KIRIM" onclick="newsletterCheck()">
		</p>
	</div>
	<!-- penjelasan SI Gadget -->
	<div class="experience">
		<p class="animate__animated animate__fadeInLeft" style="text-align:center">SIGadget adalah reseller handphone terkemuka di Indonesia, yang menjual segala jenis produk handphone dari Apple, Android, dan aksesoris perlengkapan.</p>
		<div class="column animate__animated animate__fadeInLeft">
			<ul style="list-style-type:none">
				<li>Jika Anda ingin bantuan atau memiliki masukan, silakan hubungi kami: </li><br>
				<li>Jam 9.30 - 17.30(Senin s/d Minggu).</li>
				<li>Email: customercare@sigadget.com</li>
				<li>Phone: 911</li>
				<li>WA: 081234567890</li>
			</ul>
		</div>
		<div class="column animate__animated animate__fadeInLeft">
			<ul style="list-style-type:none">
				<li>Kami menerima metode pembayaran:</li><br>
				<li>OVO</li>
				<li>GO-PAY</li>
				<li>Cash on Delivery(COD)</li>
				<li>Debit card</li>
				<li>Credit card</li>
			</ul>
		</div>

		<div class="column animate__animated animate__fadeInLeft">
			<ul style="list-style-type:none">
				<li>Kurir pengiriman:</li><br>
				<li>JNE</li>
				<li>JET Express</li>
				<li>SiCepat</li>
			</ul>
		</div>
	</div>

	<div class="bottomnav">
		<p style="text-align:center; color:white; font-size: 10px">COPYRIGHT © 2021 SIGADGET. ALL RIGHTS RESERVED.</p>
	</div>
	<!--Copas footer sampai sini -->
	<?php

	$conn->close();

	?>
</body>

</html>