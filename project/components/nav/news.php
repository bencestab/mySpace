<section id="news" class="flex flex-x-pos-center bg-tertiary">
    <div class="px-3 py-3 color-gray-dark talign-center safe-width">
        
        <div class="flex flex-wrap">
			
			<?php
			$limit = '';
			if (!$_GET['mode']) $limit = 'LIMIT 3';
			if (!$_GET['cat']) {
				if (!$_COOKIE['lang']) $cat = 1;
				else $cat = 6;
			} else {
				$cat = $_GET['cat'];
			}
			$stmt = $pdo->query('SELECT * FROM news WHERE news_state=1 
														AND news_heading='.$cat.' 
														AND (news_start<NOW() OR !news_start) 
														AND (news_over>NOW() OR !news_over) 
													ORDER BY news_start DESC, news_id DESC '.$limit);
			while ($row = $stmt->fetch()) { ?>
				<div class="w33 pt-1 px-2 talign-left h100 flex flex-wrap" style="height: auto;">
					<?php
					$img = '/images/news/blank_newsimage.jpg';
					if ($row['news_headerimg']!='') $img = $row['news_headerimg'];
					?>
					<div class="bg-white bg-image_contain bg-image_top" style="position: relative; top: 0; left: 0;">
						<div class="w100 bg-image_cover pb-100p" 
							style="position: absolute; background-image: url('<?=$img;?>');">
						</div>
						<h4 class="color-primary fsize-4 mt-1 px-1 pt-100p lheight-1_5"><a href="index.php?page=shownews&id=<?=$row['news_id'];?>"><?=$row['news_name'];?></a></h4>
						<h5 class="ml-1 px-1 mb-1 bg-primary-light color-white fsize-2 fweight-2 inline-block"><?=date_format(date_create($row['news_start']), 'Y.m.d.');?></h5>
						<div class="fsize-2 px-1 pb-1">
							<?=str_replace('&nbsp;', '', str_replace('<p>', '<p class="fsize-2 p-0 m-0">', strip_tags($row['news_lead'], '<p>, </p>')));?>
						</div>
					</div>
				</div>
			<? } ?>
			
        </div>

    </div>
</section>