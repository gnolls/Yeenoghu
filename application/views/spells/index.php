<div id="body">
<h2>Choose a Class</h2>

<?php
 $imgPath = base_url() ."assets/img/";
 $urlPath = site_url("spells/classes/");
 echo anchor($urlPath."bard", $imgPath."bard");
?>
</div>

<?php if($loginInfo['nLog'] === TRUE) { ?>	

<?php }else { ?>
	<div id="login">
	Welcome back <?php echo $loginInfo['username']; ?>!
	</div>
<?php } ?>
