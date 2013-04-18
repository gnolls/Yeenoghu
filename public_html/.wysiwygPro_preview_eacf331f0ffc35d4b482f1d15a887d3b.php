<?php
if ($_GET['randomId'] != "RKEQKHNIwzpp2tENLt0hXWocUICzHqNn4Wffnf4wwzfChXbGEG2jTI8FpcMjvklr") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
