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
    <?php }
    } ?>

</div>
<!-- /Posts -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>