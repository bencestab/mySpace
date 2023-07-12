<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <aside>
        <h1>TEMPLATE webarchitektúra</h1>
        A TEMPLATE webarchitektúra segítségével szerver oldalon, a weboldal, vagy alkalmazás layout-jában határozhatjuk meg a tartalma megjelenését és magát a tartalmát is.
        <br /><br />
        Ebből kifolyólag a Template fájljaink gyakran HTML és CSS kódokat is tartalmaznak, amelyek dinamikus adatokkal vannak feltöltve a szerver oldalon.
        <br /><br />
        A PHP kód lehetővé teszi a szerver oldali adatok feldolgozását, majd az eredmény HTML formájában kerül kiszolgálásra a kliens felé.
    </aside>
    
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
        }

        // SQL Query String
        $sql = 'SELECT *    FROM content c 
                            LEFT JOIN user u 
                            ON(c.cont_creator=u.user_id) 
                            WHERE c.cont_state>-1 
                            ORDER BY c.cont_id DESC 
                            LIMIT 6;';

        $result = $db->query($sql);
        while ($record = $result->fetch_assoc()) {
            echo "  <article>
                        <h2>$record[cont_title]</h2>
                        <h4>szerző: $record[user_realname]</h4>
                        $record[cont_content]
                        <div style='background-image: url($record[cont_img])'></div>
                    </article>";
        }

        ?>

    </section>
    
</body>
</html>