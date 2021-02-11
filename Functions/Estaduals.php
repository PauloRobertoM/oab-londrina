<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Estaduals {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'estaduals_register_meta_boxes'));
   }

   public function init() {
      $this->estaduals_post_type();
   }

   public function estaduals_post_type() {

      $labels = array(
         'name'                => _x( 'Conselho Estadual', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Conselho Estadual', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Conselho Estadual', 'text_domain' ),
         'name_admin_bar'      => __( 'Conselho Estadual', 'text_domain' ),
         'parent_item_colon'   => __( 'Conselho Estadual pai:', 'text_domain' ),
         'all_items'           => __( 'Listar Conselho Estadual', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar Conselho Estadual', 'text_domain' ),
         'add_new'             => __( 'Adicionar', 'text_domain' ),
         'new_item'            => __( 'Nova Conselho Estadual', 'text_domain' ),
         'edit_item'           => __( 'Ediar Conselho Estadual', 'text_domain' ),
         'update_item'         => __( 'Atualizar Conselho Estadual', 'text_domain' ),
         'view_item'           => __( 'Ver Conselho Estadual', 'text_domain' ),
         'search_items'        => __( 'Procurar Conselho Estadual', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'Conselho Estadual', 'text_domain' ),
         'description'         => __( 'Cadastro de Conselho Estadual', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
         'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
      );
      register_post_type( 'estaduals', $args );
   }

   public function estaduals_register_meta_boxes( $meta_boxes ) {
      $prefix = 'estaduals_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto',
         'post_types' => array( 'estaduals' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}foto",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar foto',
               'max_file_uploads' => 1,
            ),
         )
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}categoria",
         'title'      => 'Categoria',
         'post_types' => array( 'estaduals' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}categoria",
               'name'             => null,
               'type'             => 'select',
               'force_delete'     => false,
               'desc'             => 'Adicionar Categoria',
               'options' => [
                    'estadual' => 'Estadual',
                    'federal' => 'Federal',
               ],
            ),
         )
      );
      
      return $meta_boxes;
   }
}