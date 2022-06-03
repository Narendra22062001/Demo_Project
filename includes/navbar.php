<!DOCTYPE html>
<html>
<head>
	<title>Navigation Bar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initaial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="includesnavbar.css"> -->
	<style media="screen">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap');
	*{
		margin:0px;
		padding:0px;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
	}
	nav{
		width: 100%;
		height: 75px;
		background-color: #505d61;
		line-height: 75px;
		padding:0px 10px;
		position:fixed;
		z-index: 1;
	}
	nav .logo{
		font-size: 30px;
		font-weight: bold;
		letter-spacing: 1.5px;
		padding-left: 0px;
	}
	nav .logo p{
		float: left;
		color:#fff;
		text-transform: uppercase;
	}
	nav ul{
		float: right;
		padding-right: 3px;
	}
	nav ul li{
		display: inline-block;
		list-style: none;
	}
	nav ul li a{
		color:#fff;
		text-decoration: none;
		font-size: 18px;
		text-transform: uppercase;
		padding:0px 32px;
	}
	nav ul li a:hover{
		color:#c0d96f;
	}
	/* nav ul li .active{
		color:#c0d96f;
	} */
	/* .image img{
		width: 100%;
		height: 0px auto;
		opacity: 0.80;
	} */
	.adminbtn{
		font-size: 14px;
		color: red;
		padding-right: 0px;
		padding-left: 80px;

	}

	</style>
</head>
<body>

	<nav>



		<div class="logo">
			<p>Tours and Travels</p>
		</div>
		<ul>
			<li><a href="main_page.php" class="active">home</a></li>
			<li><a href="enquiry.php">Packages</a></li>
			<!-- <li><a href=""></a></li> -->
			<li><a href="enquiry.php">enquiry</a></li>
      <li><a href="signup.php" style="color:black">Signup</a></li>
      <li><a href="login.php" style="color:black">Login</a></li>
      <li><a class="adminbtn" href="admin/admin.php" >Admin</a></li>
		</ul>
	</nav>



</body>
</html>
