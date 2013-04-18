<div id="body">
<h1> All Spells </h1>
<?php foreach ($spells as $spell_item): ?>
<?php $id = $spell_item['spell_id']; ?>
	<p>
		<b>Class: </b><?php echo $spell_item['class']; ?>
		<br />
		<b>Spell Name: </b> <?php  echo anchor("spells/view/$id", $spell_item['name'] ); ?>
		<br />
		<b>Description: </b><?php echo $spell_item['description']; ?> 
	</p>
<?php endforeach ?>
</div>

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
