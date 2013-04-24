<div id="body">
<h2> Set the number of sides</h2>
<?php echo validation_errors(); ?>

<?php  
 $urlPath = site_url('dice/roll');
 $imgPath = '<img src="'.base_url() .'assets/img/dice';
 echo anchor($urlPath."/4", $imgPath.'4.png" alt="4">');
 echo anchor($urlPath."/6", $imgPath.'6.png" alt="6">');
 echo anchor($urlPath."/8", $imgPath.'8.png" alt="8">');
 echo anchor($urlPath."/10", $imgPath.'10.png" alt="10">');
 echo anchor($urlPath."/12", $imgPath.'12.png" alt="12">');
 echo anchor($urlPath."/20", $imgPath.'20.png" alt="20">');

 echo form_open('dice/roll');
?>

<label for="numSides">Number of Sides</label>
<input type="input" name ="numSides" /> <br />

<input type="submit" name="submit" value="Roll the Die" />
</div>
</form>
 
