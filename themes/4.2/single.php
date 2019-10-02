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
                <li class="shareFacebook"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></li>
            </ul>
        </div>

        <div class="txtPost">
            <div id="HOTWordsTxt" name="HOTWordsTxt">
            <?php the_content(); ?>
            </div>
        </div>
    </div>
    <!-- /cxPost -->
    
    <div id="FacebookFinalPost">
        <iframe src="http://www.facebook.com/plugins/like.php?app_id=159829247433784&amp;href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;send=true&amp;layout=standard&amp;width=630&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:630px; height:80px;" allowTransparency="true"></iframe>
	</div>
    

    <!-- posts relacionados -->
    <div class="postsRelacionados">
        <h3>Posts relacionados</h3>
        <?php similar_posts(); ?>
    </div>
    <!-- /posts relacionados -->



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
	<div id="Comentarios">
        <h3>Comentários</h3>
        <div id="fb-root"></div>
        <script>(function(d){
          var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
          js = d.createElement('script'); js.id = id; js.async = true;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          d.getElementsByTagName('head')[0].appendChild(js);
        }(document));</script>
        <div class="fb-comments" data-href="<?php echo urlencode(get_permalink($post->ID)); ?>" data-num-posts="5" data-width="630"></div>
    </div>
    <!-- /comentarios -->

    <?php }
    } ?>

</div>
<!-- /Posts -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>