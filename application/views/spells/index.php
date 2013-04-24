<div id="body">
<h1>Search for a spell</h1>


<h2>Choose a Class</h2>

<?php
 $imgPath = '<img src="'.base_url() .'assets/img/';
 $urlPath = site_url("spells/classes/");
 echo anchor($urlPath."/bard", $imgPath.'bard.png" alt="Bard">');
 echo anchor($urlPath."/barbarian", $imgPath.'barbarian.png" alt="Barbarian">');
 ?><br /><?php
 echo anchor($urlPath."/cleric", $imgPath.'cleric.png" alt="Cleric">');
 echo anchor($urlPath."/druid", $imgPath.'druid.png" alt="Druid">');
 echo anchor($urlPath."/sorcerer", $imgPath.'sorcerer.png" alt="Sorcerer">');
 ?><br /><?php
 echo anchor($urlPath."/paladin", $imgPath.'paladin.png" alt="Paladin">');
 echo anchor($urlPath."/ranger", $imgPath.'ranger.png" alt="Ranger">');
?>
</div>

