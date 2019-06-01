<table border=2>
<tr style="height: 150%;">
<th style="width: 16%; text-align: center;"> Name </th>
<th style="width: 16%; text-align: center;"> Icon </th>
<th style="width: 16%; text-align: center;"> Rarity </th>
<th style="width: 16%; text-align: center;"> Element </th>
<th style="width: 16%; text-align: center;"> Weapon</th>
<th style="width: 16%; text-align: center;"> Country </th>
</tr>
<?php
include("class/DataProviderPDO.php");
$rank = $_POST['rank'];
$ret = DataProvider_PDO::ExecuteQuery("select * from unit where Rarity = {$rank}");
while ($row = $ret -> fetch()) 
{
	$data = <<<EOD
<tr>
<td>{$row['Name']}</td>
<td><img src="{$row['Icon']}" /></td>
<td>{$row['Rarity']}</td>
<td><img src="./assets/elements/{$row['Element']}.png" /></td>
<td><img src="./assets/weapons/{$row['Weapon']}.png" /></td>
<td>{$row['Country']}</td>
</tr>
EOD;
	echo $data;
}
?>
</table>