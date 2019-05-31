<?php
if (isset($_POST['submit']))
{
include("../class/DataProviderPDO.php");
$name = $_POST['txtName'];
$element = $_POST['cbbEle'];
$weapon = $_POST['cbbWea'];
$rarity = $_POST['cbbRar'];
$country = $_POST['cbbCou'];
$icon = isset($_POST['txtIcon']) ? $_POST['txtIcon'] : "";
switch($_POST['submit']) 
{
	case "Add":
		$sql = "insert into unit (Name, Element, Weapon, Rarity, Country, Icon) values ('{$name}', '${element}', '{$weapon}', '{$rarity}', '{$country}', '{$icon}')";
		if (DataProvider_PDO::ExecuteQuery($sql))
		{
			echo "Thêm thành công!";
		}
		else echo "Lôi thêm!";
	break;
	case "Edit":
		$sql = "update unit set Element = '{$element}', Weapon = '{$weapon}', Rarity = '{$rarity}', Country = '{$country}' ";
		if ($icon != "") $sql .= ", Icon = '{$icon}' ";
		$sql .= " where Name = '{$name}' ";
		if (DataProvider_PDO::ExecuteQuery($sql))
		{
			echo "Sửa thành công!";
		}
		else echo "Lôi sửa!";
	break;
	case "Delete":
		$sql = "delete from unit where Name = '{$name}'";
		if (DataProvider_PDO::ExecuteQuery($sql))
		{
			echo "Xóa thành công!";
		}
		else echo "Lôi xóa!";
	break;
}
}
?>