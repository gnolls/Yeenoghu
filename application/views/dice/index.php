<div id="body">
<h2> Set the number of sides</h2>
<?php echo validation_errors(); ?>

<?php  
 $urlPath = site_url('dice/roll');
 $imgPath = '<img src="'.base_url() .'assets/img/dice/';
 echo anchor($urlPath."/4", $imgPath.'d4.jpg" alt="4">');
 echo anchor($urlPath."/6", $imgPath.'d6.jpg" alt="6">');
 echo anchor($urlPath."/8", $imgPath.'d8.jpg" alt="8">');
 echo anchor($urlPath."/10", $imgPath.'d10.jpg" alt="10">');
 echo anchor($urlPath."/12", $imgPath.'d12.jpg" alt="12">');
 echo anchor($urlPath."/20", $imgPath.'d20.jpg" alt="20">');

 echo form_open('dice/roll');
?>

<label for="numSides">Number of Sides</label>
<input type="input" name ="numSides" /> <br />

<input type="submit" name="submit" value="Roll the Die" />
</div>
</form>
 
