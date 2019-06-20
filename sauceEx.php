<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.wrapper {
  margin:10px auto;
  width:100%;
  font-family:sans-serif;
  color:#555;
  font-size:14px;
  line-height:24px;
}
h1 {
  font-size:20px;
  font-weight:bold;
  text-align:center;
  text-transform:uppercase;
}
h1 + p {
  text-align:center;
  margin:20px 0;
  font-size:16px;
}
.tabs {
  li {
    float:left;
    width:10%;
  }
  a {
    display:block;
    text-align:center;
    text-decoration:none;
    text-transform:uppercase;
    color: black;
    padding:10px 0;
    border-bottom:2px solid #888;
    background:#f7f7f7;
    
  }
}
.tabgroup {
  div {
    padding:10px;
    box-shadow:0 3px 10px rgba(0,0,0,.3);
  }
}
.clearfix:after {
  content:"";
  display:table;
  clear:both;
}

/* /////////////////////// */
div {
	box-sizing: border-box;
	transition: all ease-in-out .5s;
	-moz-transition: all ease-in-out .5s;
	-webkit-transition: all ease-in-out .5s;
}
.icetab {
	border: 2px solid black;
	display: inline-block; 
	font-size: 10;
	margin: 0px;	
  	color: purple;
  	 font-weight: bold;
	cursor: pointer;
	
}
.icetab:last-child {
	border-right: 2px solid black;	
}
#icetab-content {
	overflow: hidden;
	position: relative;
	border-top: 2px solid black;
}
.tabcontent {
	position: absolute;
	left: 0px;
	top: 0px;
	background: #fff;
	width: 100%;
	border-top: 0px;
	border: 2px solid black;
	border-top: 0px;
	transform: translateY(-100%);
	-moz-transform: translateY(-100%);
	-webkit-transform: translateY(-100%);
}
.tabcontent:first-child {
	position: relative;	
}
.tabcontent.tab-active {
	border-top: 0px;
	display: block;
	transform: translateY(0%);
	-moz-transform: translateY(0%);
	-webkit-transform: translateY(0%);
}


/* A tiny wee bit of visual formating */
body {
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;	
	background: #666;
	color: #454545;
}
.codepen-container {
  max-width: 900px;
  margin: 10px;
  margin-left: auto;
  margin-right: auto;
  color: black;
}
.title {
  color: green;
  text-align: center;
  letter-spacing: 14px;
  text-transform: uppercase;
  font-size: 17px;
  margin: 40px 0px;
}
.tabcontent {
	padding: 40px;
}
.icetab {
	padding: 5px;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 10px;
}
.current-tab { 
	background: #f6f6f6;
}
	</style>
</head>
<body>
	<script>
		var tabs = document.getElementById('icetab-container').children;
var tabcontents = document.getElementById('icetab-content').children;

var myFunction = function() {
	var tabchange = this.mynum;
	for(var int=0;int<tabcontents.length;int++){
		tabcontents[int].className = ' tabcontent';
		tabs[int].className = ' icetab';
	}
	tabcontents[tabchange].classList.add('tab-active');
	this.classList.add('current-tab');
}	


for(var index=0;index<tabs.length;index++){
	tabs[index].mynum=index;
	tabs[index].addEventListener('click', myFunction, false);
}





/*                     1111111111111111                 */

$('.tabgroup > div').hide();
$('.tabgroup > div:first-of-type').show();
$('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
  
})
    
</script>
<div class="codepen-container">
<div id="icetab-container">
    	<div class="icetab current-tab">Runes</div>
    	<div class="icetab">Parameter</div>
    	<div class="icetab">Special Effect 1</div>
    	<div class="icetab">Special Effect 2</div>
    	<div class="icetab">Weapon</div>
    	<div class="icetab">Synthesized Runes</div>
    	<div class="icetab">Collect</div>   
    </div>
    
    <div id="icetab-content">
    	<div class="tabcontent tab-active">
    	<b style="font-size: 30">Runes</b>
    	<div >
    	Runes are items that can be equipped by units to increase their specific stats.
    	<br>
    	Runes can be obtained from quests, medal exchange shop, inner, and occasionally sent as a gift from Merc Storia.
    	<br>
    	Their maximum mana value is 35.000.
    	<br>
    	A rune's effect depends on its mana value.
    	<br>
    	Rune set takes important role to increase units' effectiveness in battles and events. 
    	<br>
    	According to party tactics and stage's restriction, Player can combine Rune sets into units in the most efective ways.
    	<br>
    	The most recomended way to get runes is from stages and event stages. Runes with mana from 5.000 to 27.000 drop from any stage so we don't recomend exchanging runes from exchange shops.
    	<br>
    	Runes which mana are from 27.000 to 30.000 can be upgraded by Enhancer(check Enhancer tab for more information) and another rune which mana are from 27.000 to 30.000.
    	<br>
    	Runes which mana are from 30.000 to 35.000 can be upgraded by Enhancer(check Enhancer tab for more information) and another rune which mana are from 30.000 to 35.000 though we don't recomend this .
    	</div><br><br><br>

    	</div>
        <div class="tabcontent">
        	<b style="font-size: 30">Parameter</b> 
        	<div><b>Parameter</b>: Runes that increase stats (HP,ATK,ATK rate,Movement speed,Toughness) according to Runes' name.</div>
        	<div><b>Elemental</b>: Runes that multiplies damage that unit deal to a single element by (100+[rune's mana])% times according to Runes' name.</div>
        	<div><b>Guard</b>: Runes that increases defense of unit to a single element by [rune's mana]% according to Runes' name.</div>
        	<div><b>General Guard</b>: Runes that increases defense of unit to a all elements by [rune's mana/2]%.</div>
        	<b>Insert unit stat and rune's mana below for calculation result(except General Guard):</b>
        	<div>
        		
        		
				<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 100px; position: absolute;" type="number" id="txtA" step="0.001" min="5.000" max="35.000"><b>Rune mana</b><br>
				
				<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 100px; position: absolute;" type="number" id="txtB" min="50" max="30000"><b>Unit stat</b>
				<br>
				<button type="button"  class="btnTinh" id="btnX">Cal</button>
				
				<div id="txtKQ"></div>

        	
			</div>
			<script >
				function MathB(a,b,d){
						var x=(1+a/100)*b;
						return x.toFixed(2);  
				}
				$(function(){
					
					$(".btnTinh").click( function (){
						var gt = $(this).html();
						var a = $("#txtA").val().trim();
						if (a.length == 0){
							alert("Please insert your Rune's mana");
							$("#txtA").focus();
							return;
						}
						var b = $("#txtB").val().trim();
							if (b.length == 0){
							alert("Please insert your Unit's stat");
							$("#txtB").focus();
							return;
						}
						$('#txtKQ').html(MathB(parseFloat(a),parseFloat(b),gt));
					});
				});
			</script>
    	</div> 

        
        <div class="tabcontent">
        	<b style="font-size: 30">Special Effect 1</b> 
         	<div><b>Knight Rune</b>: Decreases the damage dealt towards unit(s) behind it. May stack multiple times with other Knight Runes</div>
        	<div><b>Berserk Rune</b>: Increases damage according to HP lost.</div>
        	<div>
        	<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 200px; position: absolute;" type="number" id="txtAa" step="0.001" min="5.000" max="35.000"><b>Rune mana</b><br>
				
				<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 200px; position: absolute;" type="number" id="txtBa" min="500" max="150000"><b>Unit max HP</b>
				<br>
				<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 200px; position: absolute;" type="number" id="txtCa" min="1" max="150000"><b>Unit current HP</b>
				<br>
				<button type="button" class="btnTinha" id="btnXa">Cal</button>
				
				<div id="txtKQa"></div>

        		<div><b>Healing Rune</b>: Healing rate when the unit retreats/pulls back will be equal to (base healing rate: 2% of unit's max HP)x0.4x[mana].</div>
				
				<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 200px; position: absolute;" type="number" id="txtAb" step="0.001" min="5.000" max="35.000"><b>Rune mana</b><br>
				
				<input style="width:100px ;height: 20px ;margin-top: 3px;margin-left: 200px; position: absolute;" type="number" id="txtBb" min="500" max="150000"><b>Unit max HP</b>
				<br>
				
				<button type="button"  class="btnTinhb" id="btnXb">Cal</button>
				
				<div id="txtKQb"></div>


			</div>
			<script >
				function MathBa(a,b,c,d){
						var x=(1+8*((1-(c/b))*(a/100)*(a/100)));
						return x.toFixed(2);  ;
				}
				$(function(){
					
					$(".btnTinha").click( function (){
						var gt = $(this).html();
						var a = $("#txtAa").val().trim();
						if (a.length == 0){
							alert("!!! ?Aa");
							$("#txtAa").focus();
							return;
						}
						var b = $("#txtBa").val().trim();
							if (b.length == 0){
							alert("!!! ?Ba");
							$("#txtBa").focus();
							return;
						}
						var c = $("#txtCa").val().trim();
							if (c.length == 0){
							alert("!!! ?Ca");
							$("#txtCa").focus();
							return;
						}
						$('#txtKQa').html(MathBa(parseFloat(a),parseFloat(b),parseFloat(c),gt));
					});
				});
			</script>
			<script>
				function MathBb(a,b,d){
						var x=(2*b/100)*0.4*a;
						return x.toFixed();  ;
				}
				$(function(){
					
					$(".btnTinhb").click( function (){
						var gt = $(this).html();
						var a = $("#txtAb").val().trim();
						if (a.length == 0){
							alert("!!! ?A");
							$("#txtAb").focus();
							return;
						}
						var b = $("#txtBb").val().trim();
							if (b.length == 0){
							alert("!!! ?B");
							$("#txtBb").focus();
							return;
						}
						$('#txtKQb').html(MathBb(parseFloat(a),parseFloat(b),gt));
					});
				});

			</script>
		</div>
        	

			
        	<div class="tabcontent">
        	<b style="font-size: 30">Special Effect 2</b> 
        	<b>We don't know exactly about these runes' formula(s) so let's skip these ones.</b>
         	<div><b>Dodge Rune:</b> Gives a chance to dodge attack(s) based on unit's speed. We don't know exactly about this rune formula so let's skip this one.</div>
        	<div><b>Endure Rune</b>: Gives a chance to withstand high damage (higher than unit's HP),until 2 or 1 HP left based on unit's Grit.</div>
			<div><b>Guts Rune</b>: Increases units' starting guts when deployed into battle. Guts increase is randomized between 1~5</div>
				
				
     	</div>
     	<div class="tabcontent">
     		<b style="font-size: 30">Weapon</b>
        	<div><b>Exant Rune:</b> Exclusive to Slash type units. Gives a chance to instantly kill the target(s) when target(s) HP reaches half or lower.</div>
			<div><b>Retract Rune:</b> Exclusive to Stab type units.Gives a chance to knock back the target(s). Can knock back target(s) even in attacking stance.</div>	
			<div><b>Fixate Rune:</b> Exclusive to Strike type units. Gives a chance to stop target(s) movements and increases damage dealt to it by 10%. Chance to proc of Fixate Rune is the same as Retract Rune but decrease based on reach.</div>
			<div><b>Archer Rune:</b> Exclusive to Bow type units. Gives [mana]% chance to deal critical attack(s) (1.5x damage).</div>
			<div><b>Sorcery Rune:</b> Exclusive to Magic type units.Gives a chance to knock back moving target(s). No effect on target(s) in attacking stance.</div>
			<div><b>Penetrate Rune:</b> Exclusive to Gun type units. Gives a chance to penetrate through the enemies' line, dealing extra damage to additional targets within attacking range.</div>
			<div><b>Revive Rune:</b> Exclusive to Heal type units. Gives a chance to revive units with 0 HP when defeated units run past rune user.</div>
			<div><b>Increase Rune:</b> Exclusive to Heal type units. Increases the elemental modifier element which healer's element is strong against by mana/3[%]</div>
     	</div>
     	<div class="tabcontent">
     		<b style="font-size: 30">Synthesized Runes</b> 

     		<div class="wrapper">
<ul class="tabs clearfix" data-tabgroup="first-tab-group">
  <li><a href="#tab1" class="active">Fencer Rune</a></li>
  <li><a href="#tab2">Stinger Rune</a></li>
  <li><a href="#tab3">Breaker Rune</a></li>
  <li><a href="#tab4">Enhancer Rune</a></li>
  <li><a href="#tab5">Saver Rune</a></li>
</ul>
<section id="first-tab-group" class="tabgroup">
  <div id="tab1">
    <h2>Fencer Rune</h2>
    <p>Exclusive to melee (reach 0~50), 10+ awaken, Slash type units. Gain gauge by attacking enemies.
When gauge level is 1+ and the unit takes damage, that unit will consume 1 gauge level to inflict continuous splash damage (AoE slash damage) to enemies within range and reduce taken damage for all allies.

The range of splash damage is based on the unit's reach. So to be able to attack more enemies, a melee unit with higher reach is recommended.

If Exant Rune is also equipped, additional slash damage will have independent 0.2x instant kill rate compared to Exant Rune. All enemies in splash damage range can also be affected by instant kill effect.</p>
  </div>
  <div id="tab2">
    <h2>Stinger Rune</h2>
    <p>Exclusive to melee (reach 0~50), 10+ awaken, Stab type units. Gain gauge by attacking enemies.
When gauge level is 1+ and the unit takes damage, that unit will consume 1 gauge level to inflict Intimidate status (MOV SPD↓ + DMG Taken↑) to enemies within range and reduce taken damage for all allies. Also has a chance to penetrate multiple targets (max 5 targets).</p>
  </div>
  <div id="tab3">
    <h2>Breaker Rune</h2>
    <p>Exclusive to melee (reach 0~50), 10+ awaken, Strike type units. Gain gauge by attacking enemies.
When gauge level is 1+ and the unit takes damage, that unit will consume 1 gauge level to inflict Weaken status (ATK↓ + ATK rate↑) and reduce damage taken for all allies. Also has a chance to deal additional attack.</p>
  </div>
  <div id="tab4">
    <h2>Enhancer Rune</h2>
    <p>Exclusive to mid range healing units (reach 51~150), 10+ awaken, Heal type units. The attribute correction of the element that the equipped unit's element is strong against is enhanced for the entire party. For example, a Fire element healer with an Enhancer Rune will increase the whole party's anti-wind correction. The more of the same element in the party, the stronger the effect.
When healing, the healer will overheal the (party member) target past their maximum HP and increase their attack and attack range. Overhealed units' HP will decrease over time. The maximum limit that a unit can be overhealed to depends on its toughness and HP. Those with higher endurance can be overhealed more. In addition, the higher the healer's own attack and attribute correction, the more it can overheal.

Furthermore, it should be noted that single-hit healers are better suited for Enhancer Rune, as they can overheal as much as they can with one hit.</p>
  </div>
  <div id="tab5">
    <h2>Saver Rune</h2>
    <p>Exclusive to long range healing units (reach 151~), 10+ awaken, Heal type units. A spirit will accompany the healer, which attacks using the healer's attack stat, number of targets, and number of hits. The spirit's attack speed is somewhat longer than the healer's heal speed.
The spirit also benefits from Soul and Break skills.When party members retreat, the spirit will disappear for a fixed time (115 sec at mana value 35.000) and instantly resurrect all retreating units. During this time, the spirit cannot attack. The time remaining until the spirit revives can be seen above the healer's icon. The fixed time cannot be reset by the main character's nor the healer's death.</p>
  </div>
</section>
</div>

	     	


     	</div>
     	<div class="tabcontent">
     		<b style="font-size: 30">Collect</b> 
     		<div><b>Ex Collect: </b>Increases the experience you receive from a quest by mana/6.5[%]</div>
     		<div><b>Gold Collect: </b>Increases the gold you receive from a quest by mana/6.5[%]</div>
     		<div><b>Rune Collect: </b>Increases the likelihood of receiving runes from a quest.</div>
     		<div><b>Seed Collect: </b>Increases the likelihood of receiving pets from a quest by mana/2[%]</div>

     		
     	</div>
    </div> 
</body>
</html>