<?php
	include "../config.php";
	include "../assets/scripts/script-data.php";
?>
<?php $page = "admin";?>
<!DOCTYPE html>
<html lang="id" translate="no">
<head>
	<meta name="google" content="notranslate">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="in">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="msapplication-tap-highlight" content="no">
	
    <!-- Head -->
	<title><?php echo $perusahaan['perusahaan'];?> - <?php echo $tagline['tagline'];?></title>
	<link rel="icon" href="../assets/images/konten/<?php echo $favicon['favicon'];?>">
	<meta name="description" content="This system is made by Solusi Digital ID (solusidigitalid.com)">
	<link href="../main.css" rel="stylesheet">
	<script src='../assets/js/jquery.min.js'></script>
</head>
<body>
<div id="loader" style="display:none;">
	<div class="sign-in">
		<div class="border-box">
			<img class="logo"onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $logo['logo'];?>">
			<h4><?php echo $tagline['tagline'];?></h4>
			<form class="form_validation" method="post" action="" role="form" novalidate>
				<div class="form-row">
					<span class="label_top">
						Username
					</span>
					<input type="email" class="form-control" name="username" placeholder="" required>
					<span class="invalid-feedback username">
						<i class='pe-7s-bell'></i> Username Tidak Valid!
					</span>
				</div>
				<div class="form-row">
					<span class="label_top">
						Password
					</span>
					<input type="password" class="form-control password" name="password" id="pass" placeholder="" required>
					<span id="pass_button" onclick="change()"><i class="fa fa-eye-slash"></i></span>
					<div class="invalid-feedback password">
						<i class='pe-7s-bell'></i> Password <?php echo $feedback;?>
					</div>
				</div>
				<div class="modal-footer clearfix">
					<div class="float-left"><a onclick="myFunction()" class="btn-lg btn btn-link">Recover Password</a></div>
					<div class="float-right">
						<button class="btn btn-lg btn-login" style="color:<?php echo $color_btn_login['color_btn_login'];?>;">
							<span style="text-transform:capitalize;">Login <?php echo $page;?></span>
						</button>
					</div>
				</div>
			</form>
			<script type="text/javascript">
				 function change()
				 {
					var x = document.getElementById('pass').type;
		 
					if (x == 'password')
					{
					   document.getElementById('pass').type = 'text';
					   document.getElementById('pass_button').innerHTML = '<i class="fa fa-eye"></i>';
					}
					else
					{
					   document.getElementById('pass').type = 'password';
					   document.getElementById('pass_button').innerHTML = '<i class="fa fa-eye-slash"></i>';
					}
				 }
			</script>
		</div>
	</div>
	<?php 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$user	=$koneksi->real_escape_string($_POST['username']);
			$pass	=$koneksi->real_escape_string($_POST['password']);
			if($user=='' || $pass==''){
				//Silent
			}else{
				$pass=md5($pass.$salt);
				$sqlLogin = mysqli_query($koneksi, "SELECT * FROM db_usermanager WHERE username='$user' AND password='$pass' AND tipe='$page'");
				$jml=mysqli_num_rows($sqlLogin);
				$d=mysqli_fetch_array($sqlLogin);
				if($jml > 0){
					session_start();
					$_SESSION['sign-in']		= TRUE;
					$_SESSION['username']		= $d['username'];
				
					header('Location: index'); 
				}
				else{
					echo "<div class='notifikasi'><i class='pe-7s-bell'></i> Email Atau Kata Sandi Salah!</div>";
				}												
			}
		}
	?>
	<span id="recover_password"></span>
	
	<div class="copyright">
		Copyright &copy; <?php echo date("Y"); ?> <?php echo $perusahaan['perusahaan'];?>
	</div>
	
	<!-- System -->
	<?php include "../assets/design/sign-in.php";?>

</div>
</body>
</html>