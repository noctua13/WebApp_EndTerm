<a href="../AccountManager.php"> Trở về </a>
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
	
	if (($action == "Create Account" || $action == "Close Account") && $pass != $repass) die("Mật khẩu không trùng khớp!");
	
	switch ($action)
	{
		case "Create Account":
			$sql = <<<EOD
insert into	account (username, password, permission) values ("{$user}", "{$pass}", 0)
EOD;
			if (DataProvider_PDO::ExecuteQuery($sql))
			{
				echo "Thêm tài khoản thành công!";
			}
			else 
			{
				echo "Lỗi xảy ra khi thêm tài khoản!";
			}
		break;
		case "Change Password":
			if (!isExist($user, $pass)) die("Sai thông tin tài khoản!");
			$sql = <<<EOD
update account set password = "{$repass}" where username = "{$user}"			
EOD;
			if (DataProvider_PDO::ExecuteQuery($sql))
			{
				echo "Sửa mật khẩu thành công!";
			}
			else 
			{
				echo "Lỗi xảy ra khi sửa mật khẩu!";
			}
		break;
		case "Close Account":
			$sql = <<<EOD
delete from account where username = "{$_POST['txtUser']}" and password = "{$_POST['txtPass']}"			
EOD;
			if (DataProvider_PDO::ExecuteQuery($sql))
			{
				echo "Đóng tài khoản thành công!";
			}
			else 
			{
				echo "Lỗi xảy ra khi đóng tài khoản!";
			}
		break;
	}
}
?>
