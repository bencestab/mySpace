<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 5rem;
        }

        section article {
            padding: 1rem;
            margin: 1rem;
            border: 1px solid rgba(0, 0, 0, .5)
        }

    </style>
</head>
<body>
    
    <section>

        <?php

        // Parameters for MySQL Connection
        $host 		= "mysql";
        $user 		= "sqluser";
        $password	= "123456";
        $database	= "myspace_db";
        $charset 	= 'utf8mb4';

        // MySQL Connection with mysqli
        $db = new mysqli($host, $user, $password, $database);

        // Kapcsolat ellenőrzése
        if ($db->connect_error) {
            die("Hiba a kapcsolódásban: " . $db->connect_error);
            //echo "hiba: ". $db->connect_error;
        }

        $sql = 'SELECT * FROM content c LEFT JOIN user u ON(c.cont_creator=u.user_id) WHERE c.cont_state=1 ORDER BY c.cont_id DESC LIMIT 3;';

        $result = $db->query($sql);
        while ($record = $result->fetch_assoc()) {
            /*
            echo <<<EZEGYTEMPLATESTRING
                <article>
                    <h2>$record[cont_title]</h2>
                    <h4>szerző: $record[user_realname]</h4>
                    $record[cont_content]
                </article>
                EZEGYTEMPLATESTRING;
            */

            echo "<article>
                    <h2>$record[cont_title]</h2>
                    <h4>szerző: $record[user_realname]</h4>
                    $record[cont_content]
                </article>";

        }

        ?>

    </section>
    
</body>
</html>