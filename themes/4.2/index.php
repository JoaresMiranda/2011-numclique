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
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="metaPost">
                    // publicado em <?php the_time('j F Y') ?>
                </p>
                <div class="txtPost">
                	<!--220x100-->
                    <p>
                    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'alignright size-full')); ?></a>
                    </p>
                    <?php the_excerpt(); ?>
                    <?php echo '<p class="leiamais"><a href="' . get_permalink($post->ID) . '">Leia mais &raquo;</a></p>'; ?>
                </div>
                <div class="footerPost">
                    <div class="infosCapaPost">
                        <p>
                            <strong>// por</strong> <?php the_author_posts_link(); ?> |
                            <strong>twitter:</strong> <a href="http://twitter.com/<?php the_author_nickname(); ?>">@<?php the_author_nickname(); ?></a>
                        </p>
                        <p><strong>// arquivado em</strong> <?php the_category(', '); ?></p>
                        <p><iframe src="http://www.facebook.com/plugins/comments.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&permalink=1" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:16px;" allowTransparency="true"></iframe></p>
                    </div>
                    <div class="btShare">
                        <ul>
                            <li class="shareGooglePlus"><g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone></li>
                            <li class="shareTwitter"><iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe></li>
                            <li class="shareFacebook"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /cxPost -->
    <?php
        }
    }wp_reset_query(); ?>

    <!-- paginacao -->
    <div id="navegacao">
        <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        } else {
        ?>
            <div class="alignleft"><?php next_posts_link('&laquo; Mais antigas') ?></div>
            <div class="alignright"><?php previous_posts_link('Mais novas &raquo;') ?></div>
        <?php } ?>
    </div>
    <!-- /paginacao -->
</div>
<!-- /Posts -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>