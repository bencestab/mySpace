        <section class="triple-cards" id="static_content">
            <a>
                <div class="card-image" style="background-image: url('./assets/img/1242666_140393-OT0SU2-162.jpg');">
                </div>
                <div class="card-text">
                    <h2>Lorem ipsum dolor sit</h2> amet consectetur adipisicing elit. Recusandae officia
                    laborum ab natus culpa aliquam aliquid accusamus numquam repellendus est reiciendis nobis impedit,
                    vitae porro nam dolorum alias expedita cum?
                </div>
            </a>
            <a>
                <div class="card-image" style="background-image: url('./assets/img/1247370_144563-OTLM8I-905.jpg');">
                </div>
                <div class="card-text">
                    <h2>Lorem ipsum dolor sit</h2> amet consectetur adipisicing elit. Recusandae officia
                    laborum ab natus culpa aliquam aliquid accusamus numquam repellendus est reiciendis nobis impedit,
                    vitae porro nam dolorum alias expedita cum?
                </div>
            </a>
            <a>
                <div class="card-image"
                    style="background-image: url('./assets/img/17740155_159Z_2107.w026.n002.628B.p1.628.jpg');"></div>
                <div class="card-text">
                    <h2>Lorem ipsum dolor sit</h2> amet consectetur adipisicing elit. Recusandae officia
                    laborum ab natus culpa aliquam aliquid accusamus numquam repellendus est reiciendis nobis impedit,
                    vitae porro nam dolorum alias expedita cum?
                </div>
            </a>
        </section>








        <section class="triple-cards" id="dynamic_content">

            <?php    
            $sql = 'SELECT * FROM content c LEFT JOIN user u ON(c.cont_creator=u.user_id) WHERE c.cont_state=1 ORDER BY c.cont_id DESC LIMIT 3;';

            // MYSQLI
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <a href="index.php?url=<?php echo $row['cont_url']; ?>">
                    <div class="card-image"
                        style="background-image: url('<?php echo $row['cont_img']; ?>');"></div>
                    <div class="card-text">
                        <h2>
                            <?php echo $row['cont_title']; ?>
                        </h2>
                        <h4>
                            szerző: <?php echo $row['user_realname']; ?>
                        </h4>
                        <?php echo $row['cont_content']; ?>
                    </div>
                </a>
            <?php } ?>
            
            

        </section>







        <section class="single">
        <?php    
            $sql2 = 'SELECT * FROM content c LEFT JOIN user u ON(c.cont_creator=u.user_id) WHERE c.cont_state=1 ORDER BY c.cont_id DESC LIMIT 1;';

            // MYSQLI
            $result2 = $db->query($sql2);
            while ($row2 = $result2->fetch_assoc()) { ?>
                <div style="background-image: url('<?php echo $row2['cont_img']; ?>');"></div>
                <article>
                    <h2>
                        <?php echo $row2['cont_title']; ?>
                    </h2>
                    <h4>
                        szerző: <?php echo $row2['user_realname']; ?>
                    </h4>
                    <?php echo $row2['cont_content']; ?>
                </article>
            <?php } ?>

        </section>



        <section class="single">
            <div style="background-image: url('./assets/img/1250317_143233-OTMRKH-135.jpg');"></div>
            <article>
                <h2>Lorem ipsum dolor sit</h2> amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, beatae eius. Incidunt, error
                nesciunt aliquid inventore minus laudantium doloribus saepe? At earum eum harum id illo repellendus
                sequi similique aspernatur.</article>
        </section>