<?php
include("../class/DataProviderPDO.php");
if(isset($_REQUEST['type']))
{
$type = $_REQUEST['type'];
switch ($type) 
{
	case "DELETE":
		DataProvider_PDO::ExecuteQuery("delete from account where username = '{$_REQUEST['id']}'");
	break;
	case "RESET":
		DataProvider_PDO::ExecuteQuery("update account set password = '12345' where username = '{$_REQUEST['id']}'");
	break;
}
}
?>