<div id="body">
<h2>Choose a Class</h2>

<?php
 $imgPath = '<img src="'.base_url() .'assets/img/';
 $urlPath = site_url("spells/classes/");
 echo anchor($urlPath."/bard", $imgPath.'bard.jpg" alt="Bard">');
 echo anchor($urlPath."/barbarian", $imgPath.'barbarian.jpg" alt="Barbarian">');
 <br />
 echo anchor($urlPath."/cleric", $imgPath.'cleric.jpg" alt="Cleric">');
 echo anchor($urlPath."/druid", $imgPath.'druid.jpg" alt="Druid">');
 echo anchor($urlPath."/sorcerer", $imgPath.'sorcerer.jpg" alt="Sorcerer">');
 <br />
 echo anchor($urlPath."/paladin", $imgPath.'paladin.jpg" alt="Paladin">');
 echo anchor($urlPath."/ranger", $imgPath.'ranger.jpg" alt="Ranger">');
?>
</div>

