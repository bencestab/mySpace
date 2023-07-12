<?php

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

$host 		= "mysql";
$user 		= "sqluser";
$password	= "123456";
$database	= "myspace_db";
$charset 	= 'utf8mb4';

$db = new mysqli($host, $user, $password, $database);

// Kapcsolat ellenőrzése
if ($db->connect_error) {
    die("Hiba a kapcsolódásban: " . $db->connect_error);
}

// GET 
    $sql = 'SELECT *    FROM content c 
                        LEFT JOIN user u 
                        ON(c.cont_creator=u.user_id) 
                        WHERE c.cont_state>-1 
                        ORDER BY c.cont_id DESC 
                        LIMIT 6;';
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $container = array();
        while ($record = $result->fetch_assoc()) {
            $container[] = $record;
        }
        header('Content-Type: application/json');
        echo json_encode($container, JSON_PRETTY_PRINT);
    } else {
        echo "Nincs elérhető tartalom.";
    }

// Adatbázis kapcsolat bezárása
$db->close();

?>
