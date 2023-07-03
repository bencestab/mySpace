<?php

    $host 		= "mysql";          // a localhost a konténerben nem működik, ezért hálózati aliast kell használni
    $user 		= "sqluser";
    $password	= "123456";
    $database	= "myspace_db";
    $charset 	= 'utf8mb4';

    // MYSQL Connection with MYSQLI
        $db = new mysqli($host, $user, $password, $database);
        if (!$db->set_charset('utf8')) {
            echo "error";
            exit();
        }


    // MySQL Connection with PDO
        /*
        $connection = "mysql:host=$host;dbname=$database;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            
        try {
            $db2 = new PDO($connection, $user, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        */
	
?>
