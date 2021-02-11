<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Cursos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'cursos_register_meta_boxes'));
   }

   public function init() {
      $this->cursos_post_type();
   }

   public function cursos_post_type() {

      $labels = array(
         'name'                => _x( 'Cursos', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Curso', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Cursos', 'text_domain' ),
         'name_admin_bar'      => __( 'Cursos', 'text_domain' ),
         'parent_item_colon'   => __( 'Curso pai:', 'text_domain' ),
         'all_items'           => __( 'Todas os cursos', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo curso', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo curso', 'text_domain' ),
         'edit_item'           => __( 'Ediar curso', 'text_domain' ),
         'update_item'         => __( 'Atualizar curso', 'text_domain' ),
         'view_item'           => __( 'Ver curso', 'text_domain' ),
         'search_items'        => __( 'Procurar curso', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'cursos', 'text_domain' ),
         'description'         => __( 'Cadastro de cursos', 'text_domain' ),
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
         'menu_icon'           => 'dashicons-edit-page',
      );
      register_post_type( 'cursos', $args );
   }

   public function cursos_register_meta_boxes( $meta_boxes ) {
      $prefix = 'cursos_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}dt_inicio",
         'title'      => 'Data de Início',
         'post_types' => array( 'cursos' ),
         'context'    => 'advanced',
         'fields'     => array(
            array(
               'id'   => "{$prefix}dt_inicio",
               'type' => 'datetime',
               'name' => 'Data de Início',
               'desc' => 'Data de Início',
            ),
         ),
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}dt_extenso",
         'title'      => 'Data por Extenso',
         'post_types' => array( 'cursos' ),
         'context'    => 'advanced',
         'priority'   => 'default',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}dt_extenso",
               'type' => 'text',
               'name' => 'Data por Extenso',
               'desc' => 'Exemplo: 23, 24 e 25 de Novembro',
            ),
         ),
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}duracao",
         'title'      => 'Duração',
         'post_types' => array( 'cursos' ),
         'context'    => 'advanced',
         'priority'   => 'default',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}duracao",
               'type' => 'text',
               'name' => 'Duração',
               'desc' => 'Duração',
            ),
         ),
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}local",
         'title'      => 'Local',
         'post_types' => array( 'cursos' ),
         'context'    => 'advanced',
         'priority'   => 'default',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}local",
               'type' => 'text',
               'name' => 'Local',
               'desc' => 'Local',
            ),
         ),
      );
      
      return $meta_boxes;
   }
}