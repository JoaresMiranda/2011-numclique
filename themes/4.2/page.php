<?php get_header(); ?>
<!-- Posts -->
<div id="Posts">
    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>
			<!-- cxPost -->
			<div class="cxPost">
				<p class="cartola"><?php the_category(' &gt; '); ?></p>
				<h1>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="txtPost">
					<?php the_content(); ?>
				</div>
			</div>
			<!-- /cxPost -->
    		<script type="text/javascript">
				<!--
				google_ad_client = "ca-pub-0063792419281840";
				/* 336x280 */
				google_ad_slot = "5535786149";
				google_ad_width = 336;
				google_ad_height = 280;
				//-->
			</script>
			<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
    <?php }
    } ?>

</div>
<!-- /Posts -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>