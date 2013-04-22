<div id="body">
<h1><?php echo $class ?> </h2>
  <p><b>Spell Name: </b> <?php echo $spells['name']; ?>
	<br />
  <b>Description: </b><?php echo $spells['description']; ?> </p>
	
</div>

<?php if($loginInfo['nLog'] === TRUE) {  //echo loginPage?>	

<?php }else { ?>
	<div id="login">
	Welcome back <?php echo $loginInfo['username']; ?>!
	</div>
<?php } ?>
