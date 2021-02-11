<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Convenios {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'convenios_register_meta_boxes'));
   }

   public function init() {
      $this->convenios_post_type();
   }

   public function convenios_post_type() {

      $labels = array(
         'name'                => _x( 'Convênios', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Convênios', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Convênios', 'text_domain' ),
         'name_admin_bar'      => __( 'Convênios', 'text_domain' ),
         'parent_item_colon'   => __( 'Convênios pai:', 'text_domain' ),
         'all_items'           => __( 'Listar Convênios', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar Convênios', 'text_domain' ),
         'add_new'             => __( 'Adicionar', 'text_domain' ),
         'new_item'            => __( 'Nova Convênios', 'text_domain' ),
         'edit_item'           => __( 'Ediar Convênios', 'text_domain' ),
         'update_item'         => __( 'Atualizar Convênios', 'text_domain' ),
         'view_item'           => __( 'Ver Convênios', 'text_domain' ),
         'search_items'        => __( 'Procurar Convênios', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'Convênios', 'text_domain' ),
         'description'         => __( 'Cadastro de Convênios', 'text_domain' ),
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
      register_post_type( 'convenios', $args );
   }

   public function convenios_register_meta_boxes( $meta_boxes ) {
      $prefix = 'convenios_';
      
      return $meta_boxes;
   }
}