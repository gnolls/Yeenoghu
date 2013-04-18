<div id="body">
<h2> Set the number of sides</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('dice/roll'); ?>

<label for="numSides">Number of Sides</label>
<input type="input" name ="numSides" /> <br />

<input type="submit" name="submit" value="Roll the Die" />
</div>
</form>
 
<?php if($loginInfo['nLog'] === TRUE) { ?>	
  <div id="login">
	  <h2>Log in</h2>

          <?php echo validation_errors(); ?>

          <?php echo form_open('login') ?>

	  <label for="username">Username</label> 
	  <input type="input" name="username" /><br />

	  <label for="password">Password</label>
	  <input type="password" name="password" /><br />
	
	  <input type="submit" name="submit" value="Log in" /> 

	  </form>
	</div>
<?php }else { ?>
	<div id="login">
	Welcome back <?php echo $loginInfo['username']; ?>!
	</div>
<?php } ?>
