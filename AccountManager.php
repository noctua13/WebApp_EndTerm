<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap.min.css -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Bootstrap TOC -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/afeld/bootstrap-toc/v1.0.1/dist/bootstrap-toc.min.css" />
	<!-- Bootstrap.min.js -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<!-- Bootstrap TOC -->
	<script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v1.0.1/dist/bootstrap-toc.min.js"></script>
	
    <title>Sign Up | Merc Storia Wiki</title>
	
	<link rel="stylesheet" type="text/css" href="assets/Decoration.css" />
	
	<!-- jQuery Validation -->
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script>
$(function() {
	$("#AccountForm").validate({
		rules: {
			txtUser: "required",
			txtPass: "required",
			txtRePass: "required"
			},
		messages: {
			txtUser: "Username is required!",
			txtPass: "Please enter a password!",
			txtRePass: "Please confirm your password!"
		}
	});
});
</script>
  
</head>
<body style="height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-image:  url(https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.15752-9/59178090_446544552767463_574694408348237824_n.png?_nc_cat=110&_nc_oc=AQn-96yNefjkXcSCAwgAIfFthNG_LlAeEs58AINq-dDRVWEw0H5UbMbcJ7ZQ_QqCtTc&_nc_ht=scontent.fsgn5-3.fna&oh=b7ff2d1c4e781782e263a0ffa660d56e&oe=5D657526); width: : 100%">

<div class="container-fluid">
      <!-- Top Page -->
<div class="col-md-12 blue">
		<!-- Logo -->
	<div class="row">
		<div>
			<a href="UNLOG_Welcome.php"><image src="./assets/FilthyLogo.png" /></a>
		</div>
		<div style="padding-left:5px;">
			<p class="text-white" style="font-size:30">Merc Storia Wiki</p>
		</div>
	</div>
</div>
<div class="col-md-12 white" style="background-color: rgba(255, 255, 255, 0.8);">
<p class="text-dark" style="font-size:30">Create an account</p>
<hr />
<form method="post" id="AccountForm" action="php/AccountAction.php">
	<table border=1 colspan=2 align=center style="width:40%">
		<tr>
		<td>Username</td>
		<td><input type="text" name="txtUser" id="txtUser" placeholder="username..." style="width:100%" /></td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type="password" name="txtPass" id="txtPass" placeholder="password..." style="width:100%" /></td>
		</tr>
		<tr>
		<td>Confirm Password </td>
		<td><input type="password" name="txtRePass" id="txtRePass" placeholder="confirm password..." style="width:100%" /></td>
		</tr>
		<tr align=center>
		<td colspan=2>
		<input type="submit" name="submit" value="Create Account" />
		</td>
		</tr>
	</table>
<!--
		<input type="submit" name="submit" value="Change Password" />
		<input type="submit" name="submit" value="Close Account" />
-->
</form>
	<div style="text-align:center;">
		<p class="text-dark">Already have an account? <a href="login.php"> Log in</a> now.</p>
	</div>
	<hr />
</div>

</div>
</body>
</html>
