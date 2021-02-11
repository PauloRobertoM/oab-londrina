<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Subsecaos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'subsecaos_register_meta_boxes'));
   }

   public function init() {
      $this->subsecaos_post_type();
   }

   public function subsecaos_post_type() {

      $labels = array(
         'name'                => _x( 'Conselho de Subseção', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Conselho de Subseção', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Conselho de Subseção', 'text_domain' ),
         'name_admin_bar'      => __( 'Conselho de Subseção', 'text_domain' ),
         'parent_item_colon'   => __( 'Conselho de Subseção pai:', 'text_domain' ),
         'all_items'           => __( 'Listar Conselho de Subseção', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar Conselho de Subseção', 'text_domain' ),
         'add_new'             => __( 'Adicionar', 'text_domain' ),
         'new_item'            => __( 'Nova Conselho de Subseção', 'text_domain' ),
         'edit_item'           => __( 'Ediar Conselho de Subseção', 'text_domain' ),
         'update_item'         => __( 'Atualizar Conselho de Subseção', 'text_domain' ),
         'view_item'           => __( 'Ver Conselho de Subseção', 'text_domain' ),
         'search_items'        => __( 'Procurar Conselho de Subseção', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'Conselho de Subseção', 'text_domain' ),
         'description'         => __( 'Cadastro de Conselho de Subseção', 'text_domain' ),
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
      register_post_type( 'subsecaos', $args );
   }

   public function subsecaos_register_meta_boxes( $meta_boxes ) {
      $prefix = 'subsecaos_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto',
         'post_types' => array( 'subsecaos' ),
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
      
      return $meta_boxes;
   }
}