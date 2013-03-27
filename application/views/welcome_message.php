<body>

<div id="container" class="clearfix">
	<h1>Welcome to Dungeon Organizer</h1>

	<div id="body">
		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>you should start by reading the <a href="http://ellislab.com/codeigniter/user-guide/">User Guide</a>.</p>
	</div>
	
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

<!- Footer in template/footer.php ->
