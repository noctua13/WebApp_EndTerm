<form method="post">
		<div>LOGIN</div><input type="text" name="txtUser" placeholder="username" style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 100px; position: absolute;"></input>
                <div style="width:400px; border-color: black ; border-width: 2px ;">
                USER NAME</div>
                <input input type="password" name="txtPass" placeholder="password" style="width:100px;height: 20px ; margin-left: 100px;margin-top: 3px; position: absolute;"></input> 
                <div>PASSWORD</div>
                <input type="submit" name="submit" value="Login" />
            </div>
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