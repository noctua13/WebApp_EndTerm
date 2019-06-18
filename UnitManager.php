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
	<!-- jQuery Validation -->
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script>
$(function() {
	$(".btnAccountManager").click(function() {
		location.href = "AccountManagerAdmin.php";
	});
	$(".btnLogout").click(function() {
		location.href = "php/logout.php";
	});
	$("#UnitForm").validate({
		rules: {
			txtName: "required",
		},
		messages: {
			txtName: "Please input character name!",
		}
	});
});
	</script>
	
    <title>Special:Unit Manager | Merc Storia Wiki</title>
	
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
<!-- Middle Page -->
<div style="padding-left:10px; padding-right:10px; padding-top:10px;" class="row">
	<!-- A vertical navbar -->
	<div class ="col-md-2 col-xl-2 white" style="background-color: rgba(255, 255, 255, 0.8);">
		<nav id="toc" class="toc" data-toggle="toc">
				<ul class="nav navbar-nav">
					<li><a class="nav-link" href="LOGGED_UnitList.php"> Unit Lists </a></li>
					<li><a class="nav-link" href="LOGGED_UnitSorter.php"> Unit Sorter </a></li>
					<li><a class="nav-link" href="LOGGED_Rune.php"> Runes </a></li>
				</ul>
		</nav>
		<hr />
		<a class="twitter-timeline" data-width="300" data-height="100%" href="https://twitter.com/merc_storia?ref_src=twsrc%5Etfw">Tweets by merc_storia</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>

	<div class="col-md-10 col-xl-10">
		<div style=" padding:10px 10px 10px 10px; background-color: rgba(255, 255, 255, 0.75);" class="col-md-12 white">
<p class="text-dark" style="font-size:30">Special:Unit Manager</p>
<p class="text-dark"> Modify records in the database. </p>
<hr />
			
<form method="post" id="UnitForm" action="php/UnitAction.php">
<table border=1 align=center style="width:40%">
</tr>
<th>Name</th> 
<td><input type="text" name="txtName" id="txtName" placeholder="character name..." style="width:100%" /> </td>
</tr>
<tr>
<th>Element</th> 
<td><select id="cbbEle" name="cbbEle">
<option value="Fire"> Fire </option>
<option value="Water"> Water </option>
<option value="Wind"> Wind </option>
<option value="Light"> Light </option>
<option value="Dark"> Dark </option>
</select></td>
</tr>
<tr>
<th>Rarity</th> 
<td><select id="cbbRar" name="cbbRar">
<option value="5"> 5* </option>
<option value="4"> 4* </option>
<option value="3"> 3* </option>
</select></td>
</tr>
<tr>
<th>Weapon</th>
<td><select id="cbbWea" name="cbbWea">
<option value="Slash"> Slash </option>
<option value="Stab"> Stab </option>
<option value="Strike"> Strike </option>
<option value="Bow"> Bow </option>
<option value="Magic"> Magic </option>
<option value="Gun"> Gun </option>
<option value="Heal"> Heal </option>
</select></td>
</tr>
<tr>
<th>Country</th> 
<td><select id="cbbCou" name="cbbCou">
<option value="Kingdom"> Kingdom </option>
<option value="Animal"> Animal </option>
<option value="Candy"> Candy </option>
<option value="Death"> Death </option>
<option value="Desert"> Desert </option>
<option value="Dinosaur"> Dinosaur </option>
<option value="Electric"> Electric </option>
<option value="Ethnic"> Ethnic </option>
<option value="Fairy"> Fairy </option>
<option value="Machine"> Machine </option>
<option value="Magic"> Magic </option>
<option value="Plant"> Plant </option>
<option value="Science"> Science </option>
<option value="Sky"> Sky </option>
<option value="Snow"> Snow </option>
<option value="Traditional"> Traditional </option>
<option value="Tropical"> Tropical </option>
<option value="Western"> Western </option>
</select></td>
</tr>
<tr>
<th>Icon URL</th>
<td><input type="text" name="txtIcon" id="txtIcon" placeholder="icon URL..." style="width:100%" /></td>
</tr>
<tr align="center">
<td colspan=2>
<input type="submit" name="submit" value="Add" />
<input type="submit" name="submit" value="Edit" />
<input type="submit" name="submit" value="Delete" />
</td>
</tr>
</table>
</form>

</div>
</div>
</div>
</body>
</html>
