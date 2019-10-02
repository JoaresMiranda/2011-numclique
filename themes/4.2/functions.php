<?php

//personaliza o leia mais
function new_excerpt_more($more) {
    global $post;
    return '';
}

/*
 * Resgata o autor linkado para seu Site.
 * A diferena dessa fun‹o Ž que monta o link do autor com um TARGET e sem o REL
 */
function get_autor_comentarios_link() {
	$url    = get_comment_author_url();
	$author = get_comment_author();

	if ( empty( $url ) || 'http://' == $url )
		echo $return = $author;
	else
		echo $return = "<a href='$url' class='url' target=_blank>$author</a>";
	return apply_filters('get_autor_comentarios_link', $return);
}

add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support("post-thumbnails");
?>