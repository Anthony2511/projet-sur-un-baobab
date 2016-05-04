<?php

/*
 * Define post types
 */

 register_post_type( 'project', [
     'label' => 'Court-métrages',
     'labels' => [
         'singular_name' => 'Court-métrage',
         'add_new' => 'Ajouter un nouveau projet'
     ],
        'description' => 'La liste de tous les projets (court-métrages, ateliers,...) affichés sur le site',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-video',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true
     ] );


/*
 * Generate an except based on custom rules, used on the home page
 */

function get_the_custom_excerpt($length = 150)
{
      $excerpt = get_the_content();
      $excerpt = strip_shortcodes( $excerpt );
      $excerpt = strip_tags( $excerpt );
      return substr($excerpt, 0, $length);
}

function the_custom_excerpt($length = 150)
{
      echo get_the_custom_excerpt($length);
}
