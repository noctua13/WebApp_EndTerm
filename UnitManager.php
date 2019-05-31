<form method="post" id="UnitForm" action="php/UnitAction.php">
<table border=1>
</tr>
<th>Name</th> 
<td><input type="text" name="txtName" id="txtName" placeholder="character name..." style="width:300px" /> </td>
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
<th>Weapo</th>
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
<td><input type="text" name="txtIcon" id="txtIcon" placeholder="icon URL..." style="width:300px" /></td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script>
$(function() {
	$("#UnitForm").validate({
		rules: {
			txtName: "required",
		},
		messages: {
			txtName: "Vui lòng nhập thông tin!",
		}
	});
});
</script>