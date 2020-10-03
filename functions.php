<?php

function Arrayone_files() {
  
  wp_enqueue_style('bootstrap_css', get_theme_file_uri('/css/bootstrap.min.css'));
  wp_enqueue_script('jQuery', get_theme_file_uri('/js/jquery-3.3.1.min.js'));


  wp_enqueue_style('font-awesome', get_theme_file_uri('/css/all.css'));

  wp_enqueue_style('rtl', get_theme_file_uri('/css/rtl.css'));
  wp_enqueue_style('Arrayone_main_styles', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'Arrayone_files');
add_theme_support( 'post-thumbnails' );


function ArrayOne_featuers(){
  add_theme_support('title-tag');

    register_nav_menu('headerMenuLocation','Header Menu Location');
}
 add_action('after_setup_theme','ArrayOne_featuers');
 function set_post_view_custom_field() {
  if ( is_single() ) {
      global $post;
      $post_id = $post->ID;
      $count = 1;
      $post_view_count = get_post_meta( $post_id, 'post_view_count', true );
      if ( $post_view_count ) {
          $count = $post_view_count + 1;
      }
      update_post_meta( $post_id, 'post_view_count', $count );
  }
}
add_action( 'wp_head', 'set_post_view_custom_field' );

function add_post_view_count_column( $columns ) {
  if( is_array( $columns ) && ! isset( $columns['post_view_count'] ) )
      $columns[ 'post_view_count' ] = 'تعداد بازدید';
  return $columns;
}
add_filter( 'manage_posts_columns', 'add_post_view_count_column' );



function set_post_view_count_column( $column_name, $post_ID ) {
  if ( $column_name == 'post_view_count' ) {
      $count = get_post_meta( $post_ID, 'post_view_count', true );
      echo $count ? $count : 0;
  }
}
add_action( 'manage_posts_custom_column', 'set_post_view_count_column', 10, 2);

function get_post_view_count( $post_id ){
  return get_post_meta( $post_id, 'post_view_count', true );
}



function elnaz_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
  <div id="comment-<?php comment_ID(); ?>">
  <div>
  <div class="author-name">
  <strong>
  <?php $user_name_str = substr(get_comment_author(),0, 20); ?>
  <?php printf(__('%s','text-domain'), $user_name_str) ?>  در تاریخ <?php printf(__('%1$s','text-domain'), get_comment_date()) ?><?php edit_comment_link(__('(ویرایش)','text-domain'),'&nbsp; ','') ?> 
  </strong>
  </div>
  </div>
  <?php if ($comment->comment_approved == '0') : ?>
  <em>دیدگاه شما در انتظار تائید مدیریت است</em>
  <br />
  <?php endif; ?>
  <div class="comment-text">
  <?php comment_text() ?>
 </div>
  <div>
  <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
  </div>
  </div>
 <?php
  }