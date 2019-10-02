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
        <p class="metaPost">
            // publicado em <?php the_time('j F Y') ?>
        </p>
        <div class="top-post">
            <script type='text/javascript'>
                GA_googleFillSlot("FullBanner_top");
            </script>
        </div>

        <div class="btShare">
            <ul>
                <li class="shareGooglePlus"><g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone></li>
                <li class="shareTwitter"><iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe></li>
                <li class="shareFacebook"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=85&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:85px; height:20px"></iframe></li>
            </ul>
        </div>

        <div class="txtPost">
            <?php the_content(); ?>
        </div>
    </div>
    <!-- /cxPost -->
    
    <div id="AdSenseRodapePost">
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
    </div>

	    <!-- comentarios -->
	    <?php comments_template(); ?>
	    <!-- /comentarios -->
    <?php }
    } ?>

</div>
<!-- /Posts -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>