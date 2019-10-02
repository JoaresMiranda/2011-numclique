<!-- Coluna -->
<div id="Coluna">

    <?php
    if (is_single()) {
	    while (have_posts ()) {
            the_post(); ?>
		    <!-- autor -->
		    <div id="Autor">
		        <h3>Autor do post</h3>
		        <div class="caixaAutor">
		            <?php echo get_avatar( get_the_author_email(), '70' ); ?>
		            <h4 class="nomeAutor"><?php the_author(); ?></h4>
		            <p><?php the_author_description(); ?></p>
		            <p><strong>Todos os posts de</strong> <?php the_author_posts_link(); ?> | 
		            <strong>Twitter:</strong> <a href="http://twitter.com/<?php the_author_nickname(); ?>" target="_blank">@<?php the_author_nickname(); ?></a></p>
		        </div>
		    </div>
		    <!-- /autor -->
	<?php 
		}
	} ?>
    <!-- xoxal media -->
    <div id="XoxalMedia">
        <h4>Social Media</h4>
        <div class="numerosRSS">
            <p class="numeroTotal">
            	<a href="http://numclique.net/feed/" target=_blank>
                <script type="text/javascript"> xfeedburner("http://feeds.feedburner.com/numclique")</script>
                </a>
            </p>
            <p>assinantes</p>
        </div>

        <div class="numerosTwitter">
            <p class="numeroTotal"><a href="http://twitter.com/numclique/" target=_blank>
                <script type="text/javascript"> xtwitter("numclique") </script>
            </a>
            </p>
            <p>seguidores</p>
        </div>
    </div>
    <!-- /xoxal media -->
    
    <!-- posts recentes -->
    <div id="PostsRecentes">
        <h3>Posts recentes</h3>
        <ul>
            <?php
            $args = array('numberposts' => 10);
            $rand_posts = get_posts( $args );
			foreach ($rand_posts as $post) { ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            } ?>
        </ul>
    </div>
    <!-- /posts recentes -->

    <!-- banner quadrado -->
    <div id="BannerQuadrado" class="publicidade">
        <h4>Publicidade - Banner Quadrado</h4>
        <div>
            <script type='text/javascript'>
                GA_googleFillSlot("Quadrado");
            </script>
        </div>
    </div>
    <!-- /banner quadrado -->

    <!-- HotLinks -->
    <div id="HotLinks">
        <h3>HotLinks</h3>
        <ul>
            <?php
            $the_query = new WP_Query('page_id=19764');

            while ($the_query->have_posts()) : $the_query->the_post();
                the_content();
            endwhile;

            wp_reset_postdata();
            ?>
        </ul>
    </div>
    <!-- /HotLinks -->

    <!-- Vale o clique -->
    <div id="ValeClique">
        <h3>Vale o clique</h3>
        <ul>
            <?php
            $the_query = new WP_Query('page_id=19766');

            while ($the_query->have_posts()) : $the_query->the_post();
                the_content();
            endwhile;

            wp_reset_postdata();
            ?>
        </ul>
    </div>
    <!-- /Vale o clique -->

</div>
<!-- /Coluna -->

</div>
<!-- /Content -->