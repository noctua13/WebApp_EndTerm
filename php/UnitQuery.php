<?php
include("../class/DataProviderPDO.php");
$sql = "select * from unit ";

$EleList = isset($_REQUEST['Ele']) ? $_REQUEST['Ele'] : "";
$WeaList = isset($_REQUEST['Wea']) ? $_REQUEST['Wea'] : "";
$RarList = isset($_REQUEST['Rar']) ? $_REQUEST['Rar'] : "";
$CouList = isset($_REQUEST['Cou']) ? $_REQUEST['Cou'] : "";

if (is_array($EleList) || is_array($WeaList) || is_array($RarList) || is_array($CouList))	
{
$sql .= 'where ';
$temp = array();
if (is_array($EleList)) 
{
	$selected = array();
	foreach ($_REQUEST['Ele'] as $select) 
	{ 
			$selected[] = " Element = '$select' ";
	}
	$str =  "(" . implode(' or ', $selected) . ') ';
	array_push($temp, $str);
}
if (is_array($WeaList)) 
{
	$selected = array();
	foreach ($_REQUEST['Wea'] as $select) 
	{ 
			$selected[] = " Weapon = '$select' ";
	}
	$str =  "(" . implode(' or ', $selected) . ') ';
	array_push($temp, $str);
}
if (is_array($RarList)) 
{
	$selected = array();
	foreach ($_REQUEST['Rar'] as $select) 
	{ 
			$selected[] = " Rarity = $select ";
	}
	$str =  "(" . implode(' or ', $selected) . ') ';
	array_push($temp, $str);
}
if (is_array($CouList)) 
{
	$selected = array();
	foreach ($_REQUEST['Cou'] as $select) 
	{ 
			$selected[] = " Country = '$select' ";
	}
	$str =  "(" . implode(' or ', $selected) . ') ';
	array_push($temp, $str);
}
$sql.= implode(' and ', $temp);
}
?>
<table border=1>
<tr>
<th>Name</th><th>Icon</th><th>Element</th><th>Weapon</th><th>Rarity</th><th>Country</th>
</tr>
<?php
$Unitlist = DataProvider_PDO::ExecuteQuery($sql);
while ($row = $Unitlist -> fetch()) 
{
	$data = <<<EOD
<tr>
<td>{$row['Name']}</td>
<td><img src="{$row['Icon']}" /></td>
<td><img src="./assets/elements/{$row['Element']}.png" /></td>
<td><img src="./assets/weapons/{$row['Weapon']}.png" /></td>
<td>{$row['Rarity']}</td>
<td>{$row['Country']}</td>
</tr>	
EOD;
	echo $data;
}
?>
</table>