<form method="post">
		<div>
		Username <input type="text" name="txtUser" placeholder="username" />
		Password <input type="password" name="txtPass" placeholder="password" />
		</div>
		<input type="submit" name="submit" value="Login" />
	</form>
	
<?php
	include("class/DataProviderPDO.php");
	if (isset($_POST['submit']))
	{
		session_start();
		$user = @$_REQUEST["txtUser"];
		$pass = @$_REQUEST["txtPass"];
		$db = DataProvider_PDO::ExecuteQuery("select username from account where username = '{$user}' and password = '{$pass}'");
		$ret = $db -> fetch();
		if ($ret) 
		{
			$_SESSION["name"] = $user;
			header("Location: php/home.php");
		}
		else 
		{
			echo 'Wrong username or password.';
		}
	}
?>