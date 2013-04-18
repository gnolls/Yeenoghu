<?php echo doctype('html5'); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <?php echo $title; ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css"/>
</head>

<body>

	<div class="headwrap">
	  <header>
		<img src="<?php echo base_url();?>assets/img/title.png" alt="Dungeon Organizer" />
		<nav>
			<?php echo ul($nav['links'], $nav['attributes']); ?>
		</nav>
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
    </header>
  </div>	
<div id="container" class="wrapper">
