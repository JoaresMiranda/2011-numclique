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
                    Publicado em <?php the_time('j F Y') ?>
                </p>
                <div class="txtPost">
                    <?php if ( has_post_thumbnail()) { ?>
                        <!--220x100-->
                        <p><?php the_post_thumbnail('thumbnail', array('class' => 'alignright size-full')); ?></p>
                    <?php } ?>
                    <?php the_excerpt(); ?>
                    <?php echo '<p class="leiamais"><a href="' . get_permalink($post->ID) . '">Leia mais &raquo;</a></p>'; ?>
                </div>
            </div>
            <!-- /cxPost -->
    <?php
        }
    } else {?>
    	<!-- cxPost -->
        <div class="cxPost">
            <p class="cartola">Nada foi encontrado. Vamos tentar de novo com outras palavras? :)</p>
        </div>
        <!-- /cxPost -->
    <?php
    }
    
    wp_reset_query(); ?>

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