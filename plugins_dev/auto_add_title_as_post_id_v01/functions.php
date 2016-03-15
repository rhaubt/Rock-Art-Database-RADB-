<?php
// Automatically add ID prefix and DateTimeSeconds to Post Title after publishing

// ***** Auto Add Title to Custome Post Type *****
function add_resource_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-00-01') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'RS'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_resource_title', 10, 2 );

function add_wikipedia_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-00-02') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'WI'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_wikipedia_title', 10, 2 );

function add_unesco_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-00-03') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'UN'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_unesco_title', 10, 2 );

function add_news_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-01') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'NW'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_news_title', 10, 2 );

function add_project_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-02') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'PC'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_project_title', 10, 2 );

function add_place_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-03') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'HP'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_place_title', 10, 2 );

function add_site_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-04') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'HS'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_site_title', 10, 2 );

function add_item_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-05') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'HI'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_item_title', 10, 2 );
?>