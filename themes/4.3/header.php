<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta http-equiv="content-language" content="pt-br" />
            <meta name="robots" content="index,follow" />
            <meta name="author" content="Joares Miranda" />
            <meta name="verify-v1" content="eP+vA6K9ihp+EdJYKdkB9TDF2xZTgdWj9b8uJG6ga7w=" />
            <meta name="google-site-verification" content="X3Cxv7Aqei_rddWPix1lhJlmgN5IT9e3rh0KbdTJ56U" />

            <!-- analytics -->
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-1502075-4']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
            <!-- /analytics -->


        <!-- Facebook -->
		<?php if (is_single()) { ?>
        <meta property="og:image" content="<?php echo reset(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>">
        <?php } else { ?>
        <meta property="og:image" content="http://www.numclique.net/midiakit/imagens/icone-numclique.jpg">
        <?php
        } ?>
        <meta property="fb:admins" content="100000550563704"/>
        <meta property="fb:page_id" content="147177731988934"/> 
        <!-- /Facebook -->


            <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
            <link rel="shortcut icon" type="image/ico" href="http://www.numclique.net/favicon.ico" />

            <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css' />

            <!-- Banners -->
            <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
            <script type='text/javascript'>
                GS_googleAddAdSenseService("ca-pub-0063792419281840");
                GS_googleEnableAllServices();
            </script>
            <script type='text/javascript'>
                GA_googleAddSlot("ca-pub-0063792419281840", "FullBanner_bottom");
                GA_googleAddSlot("ca-pub-0063792419281840", "FullBanner_top");
                GA_googleAddSlot("ca-pub-0063792419281840", "Quadrado");
                GA_googleAddSlot("ca-pub-0063792419281840", "SuperBanner");
            </script>
            <script type='text/javascript'>
                GA_googleFetchAds();
            </script>
            <!-- /Banners -->

            <script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'pt-BR'}</script>

            <title>
                <?php
                if (wp_title(' ', false)) {
                    wp_title(' ');
                    echo ' | ';
                    bloginfo('name');
                } else {
                    bloginfo('name');
                    echo ' | ';
                    is_home() ? bloginfo('description') : wp_title('');
                }
                ?>
            </title>
            <!-- Script pra pegar numeros do feedburner e twitter -->
            <script type="text/javascript" src="http://numclique.net/wp-content/themes/numclique_4.1/js/twitter-feedburner.js"></script>

            
            <?php wp_head(); ?>
        </head>

		<?php if (is_single()) { ?>
        	<body id="Interna">
        <?php } else { ?>
        	<body id="Capa">
        <?php
        } ?>
            <!-- Content -->
            <div id="Content">
                <!-- Header -->
                <div id="Header">
                    <h1>
                        <a href="<?php bloginfo('home'); ?>">
                        <?php
                        bloginfo('name');
                        echo ' - ';
                        bloginfo('description');
                        ?></a>
                    </h1>
                    <!-- Busca -->
                    <div id="Busca">
                        <form id="frmBusca" method="get" action="<?php bloginfo('home'); ?>">
                            <fieldset>
                                <legend>Busca</legend>
                                <p>
                                    <label for="Palavra">Palavra:</label>
                                    <input type="text" value="busca" name="s" id="s" onfocus="if(this.value=='busca')this.value=''" onblur="if(this.value=='')this.value='busca'" />
                                    <button name="sa" id="Buscar" type="submit">Ok</button>
                                </p>
                            </fieldset>
                        </form>
                        <p class="navegacaoSecundaria">
                            <a href="<?php bloginfo('home'); ?>/equipe/" title="Conheça nossa equipe">Equipe</a> |
                            <a href="http://migre.me/5GsBE" target="_blank" title="Preencha o formulário que entraremos em contato">Seja um colaborador</a> |
                            <a href="<?php bloginfo('home'); ?>/midiakit/" title="Nosso MidiaKit">Anuncie</a> |
                            <a href="<?php bloginfo('home'); ?>/contato/" title="Solte o verbo">Contato</a>
                        </p>
                    </div>
                    <!-- /Busca -->
                </div>
                <!-- /Header -->
                <!-- Menu -->
                <div id="Menu">
                    <h4>Menu Principal</h4>
                    <ul>
                        <li><a href="<?php bloginfo('home'); ?>/category/noticias/">Notícias</a></li>
                        <li><a href="<?php bloginfo('home'); ?>/category/celulares/">Mobile</a></li>
                        <li><a href="<?php bloginfo('home'); ?>/category/jogos/">Jogos</a></li>
                        <li><a href="<?php bloginfo('home'); ?>/category/curiosidades/">Curiosidades</a></li>
                        <li><a href="<?php bloginfo('home'); ?>/category/comedia/">Comédia</a></li>
                        <li><a href="<?php bloginfo('home'); ?>/category/videos/">Vídeos</a></li>
                    </ul>
                </div>
                <!-- /Menu -->