<?php
header("Content-Type: text/html; charset=UTF-8");

if($_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
 echo  $_POST["data"]); 
}
?>