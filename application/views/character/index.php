<body>
<?php echo anchor(site_url('character/create'), 'Create a Character'); ?>
<br />
<b>Name: </b><?php echo $character['name'];?><br />
<b>Class</b><?php echo $character['class'];?><br />
<b>Race:</b><?php echo $character['race'];?><br />
<b>Gender:</b><?php echo $character['gender'];?><br />
<b>Discription</b><?php echo $character['looks'];?><br />
</body>
