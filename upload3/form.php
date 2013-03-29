<?php

// you can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
// $bar = $_POST['bar'];


/*
echo 'http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/ </br>';
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
*/

// echo gettype($bar);

if($_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
 echo filesize($_POST['bar']); 
}

?> 