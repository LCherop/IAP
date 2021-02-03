<!DOCTYPE html>
<html>
<head>
	<title>No Less | Register</title>
	<link rel="stylesheet" type="text/css" href="styler.css">
</head>
<body>
	<div class="main">
		<header>
		<p>No Less Sportswear</p>
		
		</header>
		<div class="mainBox">
		<div class="header">
			<a href="login.php">LOG IN</a>
			<a href="register.php"  style="color:#CC9B54 ">REGISTER</a>
		</div>
		<div class="content">
			<form method="post" action="reader.php" enctype="multipart/form-data">
				
				<p>
				<input type="text" name="fName" placeholder="Full Name">
				</p>

				<p>
				<input type="email" name="Email" placeholder="Email">
				</p>
				
				<p>
				<input type="Password" name="passW" placeholder="Password">
				</p>
				
				<p>
				<input type="text" name="cor" placeholder="City of Residence"></p>

				<p><label>Profile Photo</label>
				<input type="file" name="prof" ></p>

				<p><input type="submit" name="register"></p>
			</form>
		</div>
	</div>
	</div>


</body>
</html>