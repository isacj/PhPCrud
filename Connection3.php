<?php
$mysqli = new mysqli("localhost", "root", "","Contacts");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();

}


?>