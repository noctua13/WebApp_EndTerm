<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<title> CREATE ACCOUNT</title>
	<style type="text/css">
body, html {
  height: 100%;
  background-color: lightgrey;
}


.bg-image{height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  background-image:  url(https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.15752-9/61682446_623288441474103_344394529610137600_n.jpg?_nc_cat=101&_nc_eui2=AeH-F8WCYZzTSslsGzAMxEG0YZoNMqx9YaDL82KvPfTN2XghBg16dY4V-w21HVFolyIOfBLzNb4mDfvUh0u7Bt9SpZj_PI0HvjIIbl2MOyuj-g&_nc_oc=AQk-OAoPRXU7h52yvqi1w4fMA0_XgQYFf0Nka2azStGxCYCz1IXfjOAtvxbzP6PCgVk&_nc_ht=scontent.fsgn5-1.fna&oh=4d433fd86ddbced5c520afefe9b622ff&oe=5D9386A4);
  opacity: 0.8;}
	</style>
</head>
<body>
<div class="bg-image"></div>
<div style="transform: translate(0, -700px);position: absolute;margin-left: 55px;margin-top : 60px;border-width: 5px;border:solid black;border-radius: 5px;width: 500px;border-width: 3px; background-color: lightgrey; ">
	<div style="margin:10px;text-align: center;">CREATE ACCOUNT</div>
	<div style="width: 480px;margin-left: 10px;">
	<form method="post" id="AccountForm" action="php/AccountAction.php">
		<div>
		Username <input style="margin-left: 60px;" type="text" name="txtUser" id="txtUser" placeholder="username" /> <br />
		Password <input style="margin-left: 63.5px;" type="password" name="txtPass" id="txtPass" placeholder="password" /> <br />
		Confirm Password <input style="margin-left: 5.5px;" type="password" name="txtRePass" id="txtRePass" placeholder="confirm password" /> <br />
		</div>
		<input type="submit" name="submit" value="Create Account" />
		<input type="submit" name="submit" value="Change Password" />
		<input type="submit" name="submit" value="Close Account" />
		
	</form>
	

	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
			txtUser: "Vui lòng nhập tên đăng nhập!",
			txtPass: "Vui lòng nhập mật khẩu!",
			txtRePass: "Vui lòng nhập lại mật khẩu!"
		}
	});
});
</script>
    <button 
    style="margin-top:  10px;margin-bottom: 10px;" class="logout" onClick="window.location = 'TestWebProj.php'">Back</button>
</div>
</div>	
</body>
</html>
