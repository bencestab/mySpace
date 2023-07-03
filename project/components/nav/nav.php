<nav>
        <mark></mark>
        <section>
            <?php

            $query = 'SELECT * FROM navigation WHERE nav_state=1 ORDER BY nav_id ASC';

            // MYSQLI
            $sql = $query;
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo '<a href="/">'.$row['nav_title'].'</a>';
            }

			// PDO
			$stmt = $pdo->query($query);
			while ($row = $stmt->fetch()) {
                echo '<a href="/">'.$row['nav_title'].'</a>';
            }
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