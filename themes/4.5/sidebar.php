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

    <!-- Banner Facebook -->
    <div id="BannerFacebook">
    	<a href="http://migre.me/5Qqg0" target="_blank" title="Acesse e curta nossa fanpage">Facebook.com/NumClique</a>
        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fnumclique&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:258px;" allowTransparency="true"></iframe>
    </div>
    <!-- /Banner Facebook -->

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
        
    <!-- Categorias -->
    <div id="Categorias">
        <h3>categorias</h3>
		<?php wp_dropdown_categories('orderby=name'); ?>            
    </div>
    <!-- /Categorias -->

    <!-- Arquivo -->
    <div id="Arquivo">
        <h3>Arquivo</h3>
        <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
        <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
        <?php wp_get_archives('type=monthly&format=option&show_post_count=0'); ?> </select>
    </div>
    <!-- Arquivo -->

    <!-- Vale o clique -->
    <div id="ValeClique">
        <h3>Vale o clique</h3>
		<?php
        $the_query = new WP_Query('page_id=19766');

        while ($the_query->have_posts()) : $the_query->the_post();
            the_content();
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
    <!-- /Vale o clique -->

    <!-- Links -->
    <div id="Links">
        <h3>Links</h3>
        <ul>
            <?php
            $bookmarks = get_bookmarks(array(
                        'orderby' => 'name',
                        'order' => 'ASC'
                    ));

            foreach ($bookmarks as $bm) {
                printf('<li><a href="%s">%s</a></li>', $bm->link_url, __($bm->link_name));
            } ?>
        </ul>
    </div>
    <!-- /Links -->

</div>
<!-- /Coluna -->

</div>
<!-- /Content -->