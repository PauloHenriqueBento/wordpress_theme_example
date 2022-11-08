<?php 

//Chamada simplificadas
function get_field2($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($page_id, $key, true);
}

function the_field2($key, $page_id = 0){
    echo get_field2($key, $page_id);
}
// Fim das chamadas simplificadas -------



// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
  $cmb = new_cmb2_box([
    'id' => 'home_box', // id deve ser único
    'title' => 'Home',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  $categoria = $cmb->add_field([
    'name' => 'Categorias',
    'id' => 'categoria',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Categoria {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true
    ]
  ]);


  //O campo repetidor é do tipo group
  $pratosPeixe = $cmb->add_field([
    'name' => 'Pratos Peixe',
    'id' => 'pratosPeixe',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato Peixes {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  //Cada campo é adicionado com add_group_field
  //Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($pratosPeixe, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratosPeixe, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratosPeixe, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);


  $pratosCarne = $cmb->add_field([
    'name' => 'Pratos Carne',
    'id' => 'pratosCarne',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato Carnes {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  $cmb->add_group_field($pratosCarne, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratosCarne, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratosCarne, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);

  $cmb = new_cmb2_box([
    'id' => 'contato_box', // id deve ser único
    'title' => 'Contato',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ], // modelo de página
  ]);

  //O campo repetidor é do tipo group
  $contato = $cmb->add_field([
    'name' => 'Contato Campo',
    'id' => 'contatoCampo',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Contato {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  //Cada campo é adicionado com add_group_field
  //Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($contato, [
    'name' => 'Titulo',
    'id' => 'titulo',
    'type' => 'text',
  ]);

  $cmb->add_group_field($contato, [
    'name' => 'Texto',
    'id' => 'texto',
    'type' => 'wysiwyg',
  ]);

}


// Funções para limpar o header

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//HAbilitar Menus
add_theme_support('menus');

?>