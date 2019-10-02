<!-- Facebook -->
<div id="boxFacebook">
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNumClique%2F147177731988934&amp;width=960&amp;connections=51&amp;stream=false&amp;header=false&amp;height=340" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:960px; height:340px;" allowTransparency="true"></iframe>
</div>
<!-- /Facebook -->

<!-- Footer -->
<div id="Footer">
    <div id="ContentFooter">
        <!-- Categorias -->
        <div id="Categorias">
            <h3>categorias</h3>
            <ul>
                <?php
                $args = array(
                    'orderby' => 'name',
                    'style' => 'list',
                    'show_count' => 0,
					'exclude' => '17,3303,1184,546,3450,431,5463,1471,107',
                    'hide_empty' => 1,
                    'title_li' => '',
                );

                wp_list_categories($args); ?>
            </ul>
        </div>
        <!-- /Categorias -->

        <!-- Arquivo -->
        <div id="Arquivo">
            <?php
                $args = array(
                    'type' => 'monthly',
                    'format' => 'html',
                    'echo' => 1
                );
            ?>
                <h3>Arquivo</h3>
                <ul>
                	<?php wp_get_archives($args); ?>
            	</ul>
        </div>
        <!-- Arquivo -->

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

        <!-- tags -->
        <div id="Tags">
            <h3>Tags</h3>
            <div>
			<?php wp_tag_cloud('number=90'); ?>
            </div>
        </div>
        <!-- /tags -->
    </div>
</div>
<!-- /Footer -->

<!-- Creditos -->
<div id="Creditos">
    <div>
        <img src="<?php bloginfo('template_directory'); ?>/img/logo-numclique-rodape.gif" />
        <ul>
            <li><a href="<?php bloginfo('home'); ?>/category/noticias/">Notícias</a></li>
            <li><a href="<?php bloginfo('home'); ?>/category/celulares/">Mobile</a></li>
            <li><a href="<?php bloginfo('home'); ?>/category/jogos/">Jogos</a></li>
            <li><a href="<?php bloginfo('home'); ?>/category/curiosidades/">Curiosidades</a></li>
            <li><a href="<?php bloginfo('home'); ?>/category/comedia/">Comédia</a></li>
            <li><a href="<?php bloginfo('home'); ?>/category/videos/">Vídeos</a></li>
        </ul>
    </div>
    <p>Powered by <a href="http://wordpress.org/">Wordpress</a> com orgulho</p>
</div>
<!-- /Creditos -->

<!-- super banner -->
<div id="SuperBanner" class="publicidade">
    <h4>Publicidade - Super Banner</h4>
    <div>
        <script type='text/javascript'>
            GA_googleFillSlot("SuperBanner");
        </script>
    </div>
</div>
<!-- /super banner -->
</body>
</html>