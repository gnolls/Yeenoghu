<h2>Create a Character</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('character/create') ?>

	<label for="name">Name</label> 
	<input type="input" name="name" /><br />

	<label for="class">Class</label>
	<?php echo form_dropdown('class', array('Bard', 'Warrior', 'etc')) //http://ellislab.com/codeigniter/user-guide/helpers/form_helper.html ?> 
	
	<input type="submit" name="submit" value="Create Character" /> 

</form>