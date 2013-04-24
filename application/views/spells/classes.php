<div id="body">
<h2><?php echo strtoupper($class) ?> </h2>
<?php foreach($spells as $spell): ?>
  <p><b>Spell Name: </b> <?php echo $spell['name']; ?>
	<br />
  <b>Description: </b><?php echo $spell['description']; ?> 
  <b> Level: </b> <?php echo $spell['description']; </p>
  <br />
<?php endforeach; ?>	
</div>

