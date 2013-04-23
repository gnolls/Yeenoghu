<div id="body">
<h1><?php echo $class ?> </h2>
<?php foreach($spells as $spell): ?>
  <p><b>Spell Name: </b> <?php echo $spell['name']; ?>
	<br />
  <b>Description: </b><?php echo $spell['description']; ?> </p>
<?php endforeach; ?>	
</div>

