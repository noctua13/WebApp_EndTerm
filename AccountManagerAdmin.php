<?php
include("class/DataProviderPDO.php");
?>
<table cellspacing=0 border=1>
<tr>
<th>Tên tài khoản</th> <th>Quyền truy cập</th> <th> Tác vụ </th>
</tr>
<?php
$list = DataProvider_PDO::ExecuteQuery("select * from account");
while($row = $list -> fetch()) 
{
	$data = <<<EOD
<tr>
<td>{$row['username']}</td><td>{$row['permission']} </td>
<td> <button data-id="{$row['username']}" class="btnxoa">Xóa</button> 
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