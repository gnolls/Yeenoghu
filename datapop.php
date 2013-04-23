<?php 
//change bard.txt to file name
$user = "";
$password = "";
$dbh = new PDO('mysql:host=localhost; dbname=talkiezone', $user, $password);
$filename = "bard.txt"; 
$file = file($filename); 

foreach($file as $line)
{  
	$final_line = explode(":", $line); 
	//change bard to class
	$dbh->query("INSERT INTO spells (name, description, class, level)".
               "VALUES ('$final_line[0]', '$final_line[1]', 'Bard', '$final_line[2]')"); 	
}
$dbh = null; 

?>
