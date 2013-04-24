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
	var flat_act = rollDie();
</script>


<?php echo validation_errors(); ?>

<?php echo form_open('character/create') ?>
	
	
	//name
 	<label for="name">Name: </label> 
	<input type="input" name="name" /><br />

	//class
	<label for="class">Class: </label>
	<?php echo form_dropdown('class', array('Bard', 'Barbarian', 'Cleric', 'Druid', 'Fighter', 'Monk', 
						'Paladin', 'Ranger', 'Rogue' , 'Sorcerer', 'Wizard', ))	?>
	//ecl
	<label for="ecl">Effective Character Level (ECL): </label> 
	<input type="input" name="ecl" /><br />
	
	//race
	<label for="race">Race: </label> 
	<?php echo form_dropdown('race', array('Humans', 'Dwarves', 'Elves', 'Gnomes', 'Half-Elves', 'Half-Orcs', 
						'Halflings'))?>
	//size			
	<label for="size">Size: </label> 
	<input type="input" name="size" /><br />
	
	//gender
	<label for="gender">Gender: </label> 
	<?php echo form_dropdown('gender', array('Female', 'Male'))?>
	
	//alignment			
	<label for="alignment">Alignment: </label> 
	<input type="input" name="alignment" /><br />

	//deity			
	<label for="deity">Deity: </label> 
	<input type="input" name="deity" /><br />
	
	//height
	<label for="height">Height: </label>
	<input type="input" name="height" /><br />
	
	//weight
	<label for="weight">Weight: </label>
	<input type="input" name="weight" /><br />
	
	//looks  I thinks this is right.. -Toy
	<label for="looks">Looks: </label>
	<input type="text" name="looks"  class="textbox" /><br />
	$textarea = Array ("name" => "looks", "cols" => "50", "row" => "10");
	echo form_textarea($textarea);
	
	//weight
	<label for="weight">Weight: </label>
	<input type="input" name="weight" /><br />
	
	
	/*note to self
		you may use document.write() to print the variable on screen(ie, document.write(str ).
		but for passing this variable to php or any other server side scripts,
		you may need to pass this variable to a hidden field(eg:input box)
		and then from there you have to submit to php.You may not be able to pass variable 
		directly to server since the java script is working from client side.
	*/


	
	//Abiltities
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
