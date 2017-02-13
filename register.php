<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REGISTER</title>
	<link rel="stylesheet" href="control.css">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="controlinout.css">

	<script language="javascript">
	function fncSubmit()
	{
		if(document.register_f.firstname.value == "")
		{
			alert('Please input ID');
			document.register_f.firstname.focus();
			return false;
		}
		if(document.register_f.lastname.value == "")
		{
			alert('Please input Password');
			document.register_f.lastname.focus();
			return false;
		}
		if(document.register_f.BRIHTDAY.value == "")
		{
			alert('Please input Password');
			document.register_f.BRIHTDAY.focus();
			return false;
		}
		if(document.register_f.BRIHTDAY.value == "")
		{
			alert('Please input Password');
			document.register_f.EMAIL.focus();
			return false;
		}
		if(document.register_f.BRIHTDAY.value == "")
		{
			alert('Please input Password');
			document.register_f.PHONE.focus();
			return false;
		}


		document.form_login.submit();
	}
	</script>

</head>
<body>
	<div class="wapper">
		<div class="header">
			<div class="logo-header"></div>
			<div class="headermenu">
				<ul>
					<li><a href="Home.php">HOME</a></li>
					<li><a href="ordermenu.php">ORDER</a></li>
					<li><a href="flavors.php">FLAVORS</a></li>
				</ul>
			</div>
			<div class="register" id="activemenu">
				<a href="">REGISTER</a>
			</div>
		</div>
		<div class="con1">
			<div class="box-center">
				<h2>LOGIN</h2>
					<div class="wapper3">
						<form action="logregister.php" name="register_f" onSubmit="JavaScript:return fncSubmit();" method="POST"> 
						  	<input class="text" type="text" name="firstname" placeholder="FIRSTNAME">
						  <br>
						  	<input class="text" type="text" name="lastname" 
						  	placeholder="LASTNAME">
						  <br>
						  <input class="text" type="text" name="BRIHTDAY" 
						  	placeholder="BRIHTDAY">
						  <br>
						  <input class="text" type="text" name="EMAIL" 
						  	placeholder="EMAIL">
						  <br>
						  <input class="text" type="text" name="PHONE" 
						  	placeholder="PHONE">
						  <br>

						  <br>
						  	<input class="submit" type="submit" value="CONFIRM">
						 </form>
					</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="logo-footer"></div>
			<div class="footer-information">
				<h1>GET FRESH OFFERS</h1>
				<ul>
					<li><a href="">About  OSHA ICE CREAM®</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>	
			</div>
			<div class="footer-information">
				<h1>GET FRESH OFFERS</h1>
				<ul>
					<li><a href="">Promotions</a></li>
				</ul>
			</div>
			<div class="footer-information">
				<h1>SHARE THIS WEBSITE</h1>
				<ul>
					<li><a href="">www.Oshaicecream.com</a></li>
				</ul>
			</div>
			
		</div>
		<div class="cb"></div>
	</div>
</body>
</html>