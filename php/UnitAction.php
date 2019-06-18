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
			echo "Added a record successfully!";
		}
		else echo "An error occured.";
	break;
	case "Edit":
		$sql = "update unit set Element = '{$element}', Weapon = '{$weapon}', Rarity = '{$rarity}', Country = '{$country}' ";
		if ($icon != "") $sql .= ", Icon = '{$icon}' ";
		$sql .= " where Name = '{$name}' ";
		if (DataProvider_PDO::ExecuteQuery($sql))
		{
			echo "Edit a record successfully!";
		}
		else echo "An error occured.";
	break;
	case "Delete":
		$sql = "delete from unit where Name = '{$name}'";
		if (DataProvider_PDO::ExecuteQuery($sql))
		{
			echo "Delete a record successfully!";
		}
		else echo "An error occured.";
	break;
}
}
?>
