<nav>
        <mark></mark>
        <section>
            <?php

            $sql = 'SELECT * FROM navigation WHERE nav_state=1 ORDER BY nav_id ASC';

            // MYSQLI
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo '<a href="/">'.$row['nav_title'].'</a>';
            }

			// PDO
            /*
			$result2 = $db2->query($sql);
			while ($row2 = $result2->fetch()) {
                echo '<a href="/">'.$row2['nav_title'].'</a>';
            }
            */
            ?>


            <!-- STATIC HTML NAV TEMPLATE
                a href="/">Home</a>
                <a href="">About</a>
                <a href="">Info</a>
                <a href="">Contact</a>
                <button>X</button>
            -->
        </section>
</nav>