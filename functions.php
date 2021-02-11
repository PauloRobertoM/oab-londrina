<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'Functions' . DIRECTORY_SEPARATOR . 'Bootstrap.php';
require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'Functions' . DIRECTORY_SEPARATOR . 'Contato.php';
require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'Functions' . DIRECTORY_SEPARATOR . 'Diretorias.php';
require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'Functions' . DIRECTORY_SEPARATOR . 'Subsecaos.php';
require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'Functions' . DIRECTORY_SEPARATOR . 'Estaduals.php';

$Bootstrap = new Bootstrap;
$Contato = new Contato;
$Diretorias = new Diretorias;
$Subsecaos = new Subsecaos;
$Estaduals = new Estaduals;

function new_excerpt_length($length) {
   return 999999999;
}
add_filter('excerpt_length', 'new_excerpt_length');


function excerpt($length, $text) {
   if (strlen($text) <= $length)
      return $text;

   $new = substr($text, 0, $length);

   return $new.'...';
}

function wordpress_pagination() {
    global $wp_query;

    $big = 999999999;

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
}

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}