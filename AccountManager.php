
<form method="post" id="AccountForm" action="php/AccountAction.php">
		<div>
		Username <input type="text" name="txtUser" id="txtUser" placeholder="username" /> <br />
		Password <input type="password" name="txtPass" id="txtPass" placeholder="password" /> <br />
		Confirm Password <input type="password" name="txtRePass" id="txtRePass" placeholder="confirm password" /> <br />
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