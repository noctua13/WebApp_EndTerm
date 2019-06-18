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
	
    <title>Unit Sorter | Merc Storia Wiki</title>
	
	<link rel="stylesheet" type="text/css" href="assets/Decoration.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(function() {
	getUnit("", "", "", ""); 
	$("#btnSearch").click(function() {
		var eleList = [];
		var weaList = [];
		var rarList = [];
		var couList = [];
        $.each($("input[name='element']:checked"), function(){
            eleList.push($(this).val());
        });
		$.each($("input[name='weapon']:checked"), function(){
            weaList.push($(this).val());
        });
		$.each($("input[name='rarity']:checked"), function(){
            rarList.push($(this).val());
        });
		$.each($("input[name='country']:checked"), function(){
            couList.push($(this).val());
        });
		getUnit(eleList, weaList, rarList, couList);
	});	
});
function getUnit(data1, data2, data3, data4) 
{
	$.ajax({
		url: "./php/UnitQuery.php",
		data: {Ele : data1, Wea: data2, Rar: data3, Cou: data4},
		success:  function(responData) 
		{
			$("#result").html(responData);
		}
	});
	$(".btnManage").click(function() {
		location.href = "UnitManager.php";
	});
	$(".btnLogout").click(function() {
		location.href = "php/logout.php";
	});
	$(".btnAccountManager").click(function() {
		location.href = "AccountManagerAdmin.php";
	});
	$(".btnLogin").click(function() {
		location.href = "login.php";
	});
	$(".btnSignUp").click(function() {
		location.href = "AccountManager.php";
	});
}
</script>
  
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
				<a href="LOGGED_UnitSorter.php"><image src="./assets/FilthyLogo.png" /></a>
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
if (!isset($_SESSION['name'])) 
{
	echo '<p> Hello, guest. </p>';
	echo '<button type="button" class="btnLogin"> Login </button> <button type="button" class="btnSignUp"> Sign Up </button>';
}
else 
{
	echo "<p>Hello. " . $_SESSION['name'] . ".</p>";
	echo "<button type='button' class='btnLogout'> Log out </button>";
	if ($_SESSION['permission'] != 0) 
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
					<li><a class="nav-link active" href="#"> Unit Sorter </a></li>
					<li><a class="nav-link" href="LOGGED_Rune.php"> Runes </a></li>
				</ul>
		</nav>
		<hr />
		<a class="twitter-timeline" data-width="300" data-height="100%" href="https://twitter.com/merc_storia?ref_src=twsrc%5Etfw">Tweets by merc_storia</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>

	<div class="col-md-10 col-xl-10">
		<div style=" padding:10px 10px 10px 10px; background-color: rgba(255, 255, 255, 0.75);" class="col-md-12 white">
			<!-- Start of File -->

<p class="text-dark" style="font-size:30">Unit Sorter</p>
<?php
if (isset($_SESSION['permission']))
echo '<button type="button" class="btnManage">Manage</button>';
?>
<hr />
<p class="text-dark"> This ultility is for searching characters with specific attributes. </p>

<table border=1 align=center>
<tr>
<th>Element</th>
<th>Weapon</th>
<th>Rarity</th>
<th colspan=4>Country</th>
</tr>
<tr>
<td>
<input type='checkbox' name='element' value ='Fire'> Fire <br />
<input type='checkbox' name='element' value ='Water'> Water <br />
<input type='checkbox' name='element' value ='Wind'> Wind <br />
<input type='checkbox' name='element' value ='Light'> Light <br />
<input type='checkbox' name='element' value ='Dark'> Dark <br />
</td>
<td>
<input type='checkbox' name='weapon' value ='Slash'> Slash <br />
<input type='checkbox' name='weapon' value ='Stab'> Stab <br />
<input type='checkbox' name='weapon' value ='Strike'> Strike <br />
<input type='checkbox' name='weapon' value ='Bow'> Bow <br />
<input type='checkbox' name='weapon' value ='Magic'> Magic <br />
<input type='checkbox' name='weapon' value ='Gun'> Gun <br />
<input type='checkbox' name='weapon' value ='Heal'> Heal <br />
</td>
<td>
<input type='checkbox' name='rarity' value =5> 5* <br />
<input type='checkbox' name='rarity' value =4> 4* <br />
<input type='checkbox' name='rarity' value =3> 3* <br />
</td>
<td>
<input type='checkbox' name='country' value ='Animal'> Animal <br />
<input type='checkbox' name='country' value ='Candy'> Candy <br />
<input type='checkbox' name='country' value ='Kingdom'> Kingdom <br />
<input type='checkbox' name='country' value ='Death'> Death <br />
<input type='checkbox' name='country' value ='Desert'> Desert <br />
</td>
<td>
<input type='checkbox' name='country' value ='Dinosaur'> Dinosaur <br />
<input type='checkbox' name='country' value ='Electric'> Electric <br />
<input type='checkbox' name='country' value ='Ethnic'> Ethnic <br />
<input type='checkbox' name='country' value ='Fairy'> Fairy <br />
<input type='checkbox' name='country' value ='Machine'> Machine <br />
</td>
<td>
<input type='checkbox' name='country' value ='Magic'> Magic <br />
<input type='checkbox' name='country' value ='Plant'> Plant <br />
<input type='checkbox' name='country' value ='Science'> Science <br />
<input type='checkbox' name='country' value ='Sky'> Sky <br />
<input type='checkbox' name='country' value ='Snow'> Snow <br />
</td>
<td>
<input type='checkbox' name='country' value ='Traditional'> Traditional <br />
<input type='checkbox' name='country' value ='Tropical'> Tropical <br />
<input type='checkbox' name='country' value ='Western'> Western <br />
</td>
</tr>
<tr align="center">
<td colspan=7>
<button type="button" id="btnSearch"> Sort </button>
</td>
</tr>
</table>
<hr />
<div id="result" align=center>

</div>
<!-- End of file -->
		</div>
	</div>
</div>
<!-- Bottom Page -->
<footer class="page-footer font-small blue">
<div class="container-fluid text-center">
	<p>© Copyright: Happy Elements.</p>
</div>
</footer>
</div>

</body>
</html>

