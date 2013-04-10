<?php 
//change bard.txt to file name
$filename = "bard.txt"; 
$file = file($filename); 
$lines = count($file); 

for ($line=0; $line<=$lines; $line++){ 

$final_line = explode(":", $file[$line]); 
//change bard to class
mysql_query("INSERT INTO spellbook (name, descr, class, level) VALUES ('$final_line[0]', '$final_line[1]', 'Bard', '$final_line[2]')"); 

echo  ( $line==$lines ) ? "Done" : ""; 

} 

?>
