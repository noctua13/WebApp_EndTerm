<table border=1>
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

<div id="result">
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
}
</script>
</div>