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

    </header>
  </div>	
<div class="wrapper">
	<?php if($loginInfo['nLog'] === TRUE) { ?>	
<div class="login">
	<h2>Log in</h2>
    <?php echo validation_errors(); ?>
		<form action="http://www.noleptr.com/gnolls/phpBB3/ucp.php?mode=login" method="post">
		<input type="text" name="username" size="18" placeholder="Username">
		<input type="password" name="password" size="18" placeholder="Password">
		<input type="checkbox" name="remember" value="yes" checked="">
		<input type="hidden" name="autologin" value="on">
		<input type="hidden" name="redirect" value="/gnolls/Yeenoghu">
		<button value="Log in" name="login" type="submit">Log in</button>
		<a href="http://www.noleptr.com/gnolls/phpBB3/ucp.php?mode=sendpassword">Forgotten password?</a>
		<a href="http://www.noleptr.com/gnolls/phpBB3/ucp.php?mode=register">Register</a>
		</form> 
	</div>
<?php }else { ?>
	<div class="login">
	Welcome back <?php echo $loginInfo['username']; ?>!<?php echo $userAvatar ?> <br />
	<a href="http://noleptr.com/gnolls/phpBB3/ucp.php?mode=logout&sid=<?php echo $userSID; ?>">logout</a>
	</div>
<?php } ?>
