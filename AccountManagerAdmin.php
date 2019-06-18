<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap.min.css -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Bootstrap TOC -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/afeld/bootstrap-toc/v1.0.1/dist/bootstrap-toc.min.css" />
	<!-- Bootstrap.min.js -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<!-- Bootstrap TOC -->
	<script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v1.0.1/dist/bootstrap-toc.min.js"></script>
	
    <title>Special:Account Manager | Merc Storia Wiki</title>
	
	<link rel="stylesheet" type="text/css" href="assets/Decoration.css" />
	
</head>
<body style="height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-image:  url(https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.15752-9/59178090_446544552767463_574694408348237824_n.png?_nc_cat=110&_nc_oc=AQn-96yNefjkXcSCAwgAIfFthNG_LlAeEs58AINq-dDRVWEw0H5UbMbcJ7ZQ_QqCtTc&_nc_ht=scontent.fsgn5-3.fna&oh=b7ff2d1c4e781782e263a0ffa660d56e&oe=5D657526); width: : 100%">

<div class="container-fluid">
      <!-- Top Page -->
<div class="col-md-12 blue">
		<!-- Logo -->
	<div class="row">
		<div class="col-md-8 row">
			<div>
				<a href="LOGGED_Welcome.php"><image src="./assets/FilthyLogo.png" /></a>
			</div>
			<div style="padding-left:5px;">
				<p class="text-white" style="font-size:30">Merc Storia Wiki</p>
			</div>
		</div>
		
		<div class="col-md-4">
			<div>            
				<!-- Login/Logout code -->
<?php
session_start();
if (!isset($_SESSION['name'])) header("location: UNLOG_Welcome.php");
echo "<p>Hello. " . $_SESSION['name'] . ".</p>";
echo "<button type='button' class='btnLogout'> Log out </button>";
if ($_SESSION['permission'] != 0) 
{
	echo "<button type='button' class='btnAccountManager'>Account Manager</button>";
}
?>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12 white" style="background-color: rgba(255, 255, 255, 0.8);">
<p class="text-dark" style="font-size:30">Special:Account Manager</p>
<hr />
<p class="text-dark"> This page shows the list of all accounts contributing to the Wiki. </p>
<?php
include("class/DataProviderPDO.php");
?>
<table cellspacing=0 border=1>
<tr align=center>
<th>Username</th> <th>Permission</th> <th> Actions </th>
</tr>
<?php
$list = DataProvider_PDO::ExecuteQuery("select * from account");
while($row = $list -> fetch()) 
{
	$rights = "";
	if ($row['permission'] == 0) $rights = "<button data-id='{$row['username']}' class='btnRights'> Promote </button>";
	else $rights = "<button data-id='{$row['username']}' class='btnRemove'> Demote </button>";
	$data = <<<EOD
<tr>
<td>{$row['username']}</td><td>{$row['permission']} </td>
<td> <button data-id="{$row['username']}" class="btnxoa">Delete</button> 
<button data-id="{$row['username']}" class="btnSet"> Restore password </button>
{$rights}
</td>
</tr>
EOD;
	echo $data;
}
?>
</table>
<hr />
<script>
	$(function() {
		$(".btnXoa").click(function() {
			var user = $(this).attr("data-id");
			var tr = $(this).closest("tr");
			alert("Successfully deleted account: " + user);
			$.ajax({
				url: "php/AccountActionAdmin.php",
				data: {id: user, type: "DELETE"}
			});
		});
		$(".btnSet").click(function() {
			var user = $(this).attr("data-id");
			var tr = $(this).closest("tr");
			alert("Successfully reset password for account: " + user);
			$.ajax({
				url: "php/AccountActionAdmin.php",
				data: {id: user, type: "RESET"}
			});
		});
		$(".btnRights").click(function() {
			var user = $(this).attr("data-id");
			var tr = $(this).closest("tr");
			alert("Promoted moderator rights for: " + user);
			$.ajax({
				url: "php/AccountActionAdmin.php",
				data: {id: user, type: "RIGHTS"}
			});
		});
		$(".btnRemove").click(function() {
			var user = $(this).attr("data-id");
			var tr = $(this).closest("tr");
			alert("Demoted moderator rights for: " + user);
			$.ajax({
				url: "php/AccountActionAdmin.php",
				data: {id: user, type: "REMOVE"}
			});
		});
	});
</script>

</div>

</div>
</body>
</html>
