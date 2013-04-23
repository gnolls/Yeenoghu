<h2>Create a Character</h2>
<script type="text/javascript"> 

	function rollDie()
	{
		with(Math) return 1 + floor(random() * 20); 
	} 

	var str = rollDie();
	var dex = rollDie();
	var con = rollDie();
	var int = rollDie();
	var wis = rollDie();
	var cha = rollDie();
	var bab = rollDie();
	var speed = rollDie();
	var init_mod = rollDie();
	var grap_mod = rollDie();
	var ac  = rollDie();
	var touch_ac = rollDie();
	var flat_ac = rollDie();
</script>


<?php echo validation_errors(); ?>

<?php echo form_open('character/create') ?>
	


 	<label for="name">Name: </label> 
	<input type="input" name="name" /><br />

	<label for="class">Class: </label>
	<?php echo form_dropdown('class', array('Bard', 'Barbarian', 'Cleric', 
													 'Druid', 'Fighter', 'Monk', 'Paladin', 'Ranger',
													 'Rogue' , 'Sorcerer', 'Wizard', ));	
  ?>
	<label for="ecl">Effective Character Level (ECL): </label> 
	<input type="input" name="ecl" /><br />
	

	<label for="race">Race: </label> 
	<?php echo form_dropdown('race', array('Humans', 'Dwarves', 'Elves', 
																	'Gnomes', 'Half-Elves', 'Half-Orcs',
																	'Halflings'));
  ?>

	<label for="size">Size: </label> 
	<input type="input" name="size" /><br />
	
	<label for="gender">Gender: </label> 
	<?php echo form_dropdown('gender', array('Female', 'Male'));  ?>
	

	<label for="alignment">Alignment: </label> 
	<input type="input" name="alignment" /><br />

			
	<label for="deity">Deity: </label> 
	<input type="input" name="deity" /><br />
	
	
	<label for="height">Height: </label>
	<input type="input" name="height" /><br />
	
	
	<label for="weight">Weight: </label>
	<input type="input" name="weight" /><br />
	
	
	<label for="looks">Looks: </label>

<?php
	$textarea = Array ("name" => "looks", "cols" => "50", "row" => "10");
	echo form_textarea($textarea);
?>
	
	
<br />
<br />
<br />
	<h3>Abilities</h3><br />
	These stats have been randomly generated<br />
	<ul>
	    <li style="list-style-type:none;">Strength (Str): <script>document.write(str)</script> </li> 
	    <li style="list-style-type:none;">Dexterity (Dex): <script>document.write(dex)</script> </li> 
	    <li style="list-style-type:none;">Constitution (Con): <script>document.write(con)</script> </li> 
	    <li style="list-style-type:none;">Intelligence (Int): <script>document.write(int)</script> </li> 
	    <li style="list-style-type:none;">Wisdom (Wis): <script>document.write(wis)</script> </li> 
	    <li style="list-style-type:none;">Charisma (Cha): <script>document.write(cha)</script> </li> 
	    <li style="list-style-type:none;">(Bab): <script>document.write(bab)</script> </li> 
	    <li style="list-style-type:none;">Speed: <script>document.write(speed)</script> </li>
	    <li style="list-style-type:none;">Intelligence Modifier: <script>document.write(init_mod)</script> </li> 
	    <li style="list-style-type:none;">grap_mod: <script>document.write(grap_mod)</script> </li> 
	    <li style="list-style-type:none;">ac: <script>document.write(ac)</script> </li> 
	    <li style="list-style-type:none;">touch_ac: <script>document.write(touch_ac)</script> </li>
	    <li style="list-style-type:none;">flat_ac: <script>document.write(flat_ac)</script> </li> 
	  </ul>

	<input type="submit" name="submit" value="Create Character" /> 

</form>
