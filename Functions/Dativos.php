<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Dativos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'dativos_register_meta_boxes'));
   }

   public function init() {
      $this->dativos_post_type();
   }

   public function dativos_post_type() {

      $labels = array(
         'name'                => _x( 'Lista Dativos', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Lista Dativos', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Lista Dativos', 'text_domain' ),
         'name_admin_bar'      => __( 'Lista Dativos', 'text_domain' ),
         'parent_item_colon'   => __( 'Lista Dativos pai:', 'text_domain' ),
         'all_items'           => __( 'Listar Dativos', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar Lista Dativos', 'text_domain' ),
         'add_new'             => __( 'Adicionar', 'text_domain' ),
         'new_item'            => __( 'Nova Lista Dativos', 'text_domain' ),
         'edit_item'           => __( 'Ediar Lista Dativos', 'text_domain' ),
         'update_item'         => __( 'Atualizar Lista Dativos', 'text_domain' ),
         'view_item'           => __( 'Ver Lista Dativos', 'text_domain' ),
         'search_items'        => __( 'Procurar Lista Dativos', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'Lista Dativos', 'text_domain' ),
         'description'         => __( 'Cadastro de Lista Dativos', 'text_domain' ),
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
         'menu_icon'           => 'dashicons-rest-api',
      );
      register_post_type( 'dativos', $args );
   }

   public function dativos_register_meta_boxes( $meta_boxes ) {
      $prefix = 'dativos_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}pdf",
         'title'      => 'PDF',
         'post_types' => array( 'dativos' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}pdf",
               'name'             => null,
               'type'             => 'file',
               'force_delete'     => false,
               'desc'             => 'Adicionar PDF',
               'max_file_uploads' => 1,
            ),
         )
      );
      
      return $meta_boxes;
   }
}