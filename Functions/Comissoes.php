<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Comissoes {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'comissoes_register_meta_boxes'));
   }

   public function init() {
      $this->comissoes_post_type();
   }

   public function comissoes_post_type() {

      $labels = array(
         'name'                => _x( 'Comissões', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Comissões', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Comissões', 'text_domain' ),
         'name_admin_bar'      => __( 'Comissões', 'text_domain' ),
         'parent_item_colon'   => __( 'Comissões pai:', 'text_domain' ),
         'all_items'           => __( 'Listar Comissões', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar Comissões', 'text_domain' ),
         'add_new'             => __( 'Adicionar', 'text_domain' ),
         'new_item'            => __( 'Nova Comissões', 'text_domain' ),
         'edit_item'           => __( 'Ediar Comissões', 'text_domain' ),
         'update_item'         => __( 'Atualizar Comissões', 'text_domain' ),
         'view_item'           => __( 'Ver Comissões', 'text_domain' ),
         'search_items'        => __( 'Procurar Comissões', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'Comissões', 'text_domain' ),
         'description'         => __( 'Cadastro de Comissões', 'text_domain' ),
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
      register_post_type( 'comissoes', $args );
   }

   public function comissoes_register_meta_boxes( $meta_boxes ) {
      $prefix = 'comissoes_';
      
      return $meta_boxes;
   }
}