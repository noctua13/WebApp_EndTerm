<?php
include("class/DataProviderPDO.php");
?>
<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<title>ADMINISTRATOR TOOL</title>
	<style type="text/css">
body{
  height: 100%;
   background-image:  url(https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.15752-9/61393750_834994853541110_3962676533985804288_n.png?_nc_cat=111&_nc_eui2=AeFahy_5E8s1rsSFikn_1xbuxqVKHef7ioxvjRBx-yzN8eYrdSRqAgDRlEkieCzkHcPfybqLwXUSdJQBRSyq78Ot6nN7kNkY89cQb_3XQv6iwQ&_nc_oc=AQkT5Ej3GEy0KTMeuT8SyY2aXCrXeHURJ3TTyp1BCPLw6ZWXyocMi9KrOFpy6oidmYA&_nc_ht=scontent.fsgn5-3.fna&oh=7c30665d735542a454d80aee7de1a107&oe=5D954008);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  align-items: center;
}



	</style>
</head>
<body>

<div style="transform: translate(0, 0px);position: absolute;margin-left: 5%;margin-top : 5%;border-width: 5px;border:solid rgb(100,200,500,0.85);border-radius: 5px;width:500px;border-width: 3px; background-color:rgb(255,255,255,0.85) ; align-items: center;">
	<div style="margin:10px;text-align: center;">ADMINISTRATOR TOOL</div>
	<div style="width: 40%px;margin-left: 10px;">
<table cellspacing=0 border=1>
<tr>
<th >Tên tài khoản</th> <th>Quyền truy cập</th> <th> Tác vụ </th>
</tr>
<?php
$list = DataProvider_PDO::ExecuteQuery("select * from account");
while($row = $list -> fetch()) 
{
	$data = <<<EOD
<tr>
<td>{$row['username']}</td><td>{$row['permission']} </td>
<td> <button data-id="{$row['username']}" class="btnXoa">Xóa</button> 
<button data-id="{$row['username']}" class="btnSet"> Khôi phục </button>
</td>
</tr>
EOD;
	echo $data;
}
?>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
	$(function() {
		$(".btnXoa").click(function() {
			var user = $(this).attr("data-id");
			var tr = $(this).closest("tr");
			alert("Đã xóa tài khoản: " + user);
			$.ajax({
				url: "php/AccountActionAdmin.php",
				data: {id: user, type: "DELETE"}
			});
		});
		$(".btnSet").click(function() {
			var user = $(this).attr("data-id");
			var tr = $(this).closest("tr");
			alert("Đã khôi phục mật khẩu cho tài khoản: " + user);
			$.ajax({
				url: "php/AccountActionAdmin.php",
				data: {id: user, type: "RESET"}
			});
		});
	});
</script>
<br>
</div>
</div>	
</body>
</html>

