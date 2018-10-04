<?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="style.css"/>
  <style type="text/css">
  	{margin:0; padding:0;}
 
     body {
	background-color:#dedede;
	font-family:Arial, Helvetica, sans-serif;
	color:#dedede;
     }
 
     .menu-wrap {
	background-color:#53bd84; 
	height:50px; 
	line-height:50px; 
	position:relative;
	width:10000px;
	margin:auto;
	margin-top:10px;
     }
 
     .menu-wrap ul {
	list-style:none;
     }
 
     .menu-wrap ul li a {
 	float:left; 
	width:150px; 
	display:block; 
	text-align:center; 
	color:#FFF; 
	text-decoration:none; 
	text-transform:uppercase;
     }
 
     .menu-wrap ul li a:hover {
	background-color:#666; 
	display:block;
     }
 
     .menu-wrap ul li:hover ul {
	display:block;
     }
 
     .menu-wrap ul ul {
	display:none; 
	list-style:none; 
	position:absolute; 
	background-color:#53bd84;
	left:300px; 
	top:50px; 
	width:190px;
     }
 
     .menu-wrap ul ul li a {
	float:none; 
	display:block; 
	padding-left:30px; 
	text-align:left; 
	width:160px;
     }
 
     .menu-wrap ul ul li a:hover {
	color:#fff;
      }
       .menu-wrap ul ul li a:hover {
	color:#fff;
      }
  </style>
  </head>	
  <body>
  	  <div class="menu-wrap">
	<ul>
		<li><a href="beranda.html">Beranda</a></li>
		<li><a href="about.php">Tentang Kami</a></li>
		<li><a href="kontak.html">Kontak Kami</a>
			<ul>
				<li><a href="alamat.html">Alamat Kami</a></li>
				<li><a href="kebijakan.html">Kebijakan</a></li>
			</ul>
		</li>
		<li><a href="index.php">Masuk</a>
	</li>
	</ul>
  </div>

	<div class="container">
		<div class="main">
	      <form action="" method="post">
			<h2>Masuk</h2><hr/>		
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
			<h4>Belum punya akun?</h4><a href="register.php">Daftar disini</a>
		  </form>
		</div>
   </div>

  </body>
</html>






