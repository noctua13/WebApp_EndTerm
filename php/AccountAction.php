<a href="../AccountManager.php"> Back </a>
<br />
<?php
include("../class/DataProviderPDO.php");

function isExist($user, $pass) 
{
	$row = DataProvider_PDO::ExecuteQuery("select * from account where username = '{$user}' and password = '{$pass}'");
	$record = $row -> fetch();
	if (!$record) return 0;
	return 1;
}

if (isset($_POST['submit']))
{
	$action = $_POST['submit'];
	$user = $_POST['txtUser'];
	$pass = $_POST['txtPass'];
	$repass = $_POST['txtRePass'];
	
	if (($action == "Create Account" || $action == "Close Account") && $pass != $repass) die("Password miss match!");
	
	switch ($action)
	{
		case "Create Account":
			$sql = <<<EOD
insert into	account (username, password, permission) values ("{$user}", "{$pass}", 0)
EOD;
			if (DataProvider_PDO::ExecuteQuery($sql))
			{
				echo "Account created successfully!";
			}
			else 
			{
				echo "An error occured when creating an account.";
			}
		break;
		case "Change Password":
			if (!isExist($user, $pass)) die("Username or password is incorrect!");
			$sql = <<<EOD
update account set password = "{$repass}" where username = "{$user}"			
EOD;
			if (DataProvider_PDO::ExecuteQuery($sql))
			{
				echo "Password changed successfully!";
			}
			else 
			{
				echo "An error occured when trying to change am account's password.";
			}
		break;
		case "Close Account":
			$sql = <<<EOD
delete from account where username = "{$_POST['txtUser']}" and password = "{$_POST['txtPass']}"			
EOD;
			if (DataProvider_PDO::ExecuteQuery($sql))
			{
				echo "Close account successfully!";
			}
			else 
			{
				echo "An error occured when attemping to close an account.";
			}
		break;
	}
}
?>
