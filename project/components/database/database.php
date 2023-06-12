<?php

$host = 'localhost';
$user = 'sqluser';
$password = '123456';
$database = 'myspace_db';

$db = new mysqli($host, $user, $password, $database);
if (!$db->set_charset('utf8')) {
    echo "error";
    exit();
}

?>