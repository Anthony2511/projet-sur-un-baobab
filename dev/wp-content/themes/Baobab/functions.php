<?php

/*
 * Define post types
 */

 add_theme_support( 'post-thumbnails');

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

     register_taxonomy( 'project-type', 'project', [
         'label' => 'Types de projets',
         'labels' => [
             'singular_name' => 'Type de projet',
         ],
            'public' => true,
            'description' => 'Le procédé utilisé pour créer ce projet',
            'hierarchical' => true
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

/****GENERATE POST_TITLE **/

function get_the_link($string, $replace = '%s')
{
    return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>',__($string, 'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_custom_excerpt($length);
}
