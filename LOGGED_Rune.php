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
	
    <title>Merc Storia Wiki</title>
	
	<link rel="stylesheet" type="text/css" href="assets/Decoration.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
	$(function() { 
		$(".btnAccountManager").click(function() {
			location.href = "AccountManagerAdmin.php";
		});
		$(".btnLogout").click(function() {
			location.href = "php/logout.php";
		});
		$(".btnLogin").click(function() {
			location.href = "login.php";
		});
		$(".btnSignUp").click(function() {
			location.href = "AccountManager.php";
		});
	});
</script>
  
</head>
<body style="height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-image:  url(https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.15752-9/59178090_446544552767463_574694408348237824_n.png?_nc_cat=110&_nc_oc=AQn-96yNefjkXcSCAwgAIfFthNG_LlAeEs58AINq-dDRVWEw0H5UbMbcJ7ZQ_QqCtTc&_nc_ht=scontent.fsgn5-3.fna&oh=b7ff2d1c4e781782e263a0ffa660d56e&oe=5D657526); width: : 100%" >
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
					<li><a class="nav-link" href="LOGGED_UnitList.php"> Unit Lists </a>
					</li>
					<li><a class="nav-link" href="LOGGED_UnitSorter.php"> Unit Sorter </a></li>
					<li><a class="nav-link active" href="#"> Runes </a></li>
				</ul>
		</nav>
		<hr />
		<a class="twitter-timeline" data-width="300" data-height="100%" href="https://twitter.com/merc_storia?ref_src=twsrc%5Etfw">Tweets by merc_storia</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>

	<div class="col-md-10 col-xl-10">
		<div style=" padding:10px 10px 10px 10px; background-color: rgba(255, 255, 255, 0.75);" class="col-md-12 white">
		<!-- Container -->
		<p class="text-dark" style="font-size:30">Runes</p>
		<hr />
		<p class="text-dark">
		<b>Runes</b> are items that can be equipped by units to increase their specific stats.
    	<ul class="text-dark">
    	<li>Runes can be obtained from quests, medal exchange shop, inner, and occasionally sent as a gift from Merc Storia.</li>
    	<li>Their maximum mana value is 35.000.</li>
    	<li>A rune's effect depends on its mana value.</li>
    	<li>Rune set takes important role to increase units' effectiveness in battles and events.</li>
    	<li>According to party tactics and stage's restriction, Player can combine Rune sets into units in the most efective ways.</li>
    	<li>The most recomended way to get runes is from stages and event stages. Runes with mana from 5.000 to 27.000 drop from any stage so we don't recomend exchanging runes from exchange shops.</li>
    	<li>Runes which mana are from 27.000 to 30.000 can be upgraded by Enhancer or another rune which mana are from 27.000 to 30.000.</li> 
		<li>Runes which mana are from 30.000 to 35.000 can be upgraded by Enhancer(check Enhancer tab for more information) and another rune which mana are from 30.000 to 35.000 though we don't recomend this.</li>
		</ul>
		</p>
		<p class="text-dark" style="font-size:25" id=""> Parameter</p>
		<p class="text-dark">
		Runes that increase stats (HP,ATK,ATK rate,Movement speed,Toughness) according to Runes' name.
        	<ul class="text-dark"><li>Elemental: Runes that multiplies damage that unit deal to a single element by (100+[rune's mana])% times according to Runes' name.</li>
        	<li>Guard: Runes that increases defense of unit to a single element by [rune's mana]% according to Runes' name.</li>
        	<li>General Guard: Runes that increases defense of unit to a all elements by [rune's mana/2]%.</li>
		</ul>
		</p>
		<p class="text-dark" style="font-size:25" id=""> Special Effect </p>
			<p class="text-dark"><i>Under construction.</i></p>
		<p class="text-dark" style="font-size:25" id=""> Weapon </p>
			<p class="text-dark"><i>Under construction.</i></p>
		<p class="text-dark" style="font-size:25" id=""> Synthesized Runes</p>
			<p class="text-dark"><i>Under construction.</i></p>
		<p class="text-dark" style="font-size:25" id=""> Collector </p>
			<p class="text-dark"><i>Under construction.</i></p>
		</div>
	</div>
</div>
</div>
</body>
</html>