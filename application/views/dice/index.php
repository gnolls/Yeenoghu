<div id="body">
<h2> Set the number of sides</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('dice/roll'); ?>

<label for="numSides">Number of Sides</label>
<input type="input" name ="numSides" /> <br />

<input type="submit" name="submit" value="Roll the Die" />
</div>
</form>
 
