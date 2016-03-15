<?php
// ***** Removes 'quick edit' from custom post type list *****
function remove_quick_edit( $actions ) {
 global $post;
    if( $post->post_type == 'cpt-01-01' ) {
  unset($actions['inline hide-if-no-js']);
 }
 if( $post->post_type == 'cpt-01-02' ) {
  unset($actions['inline hide-if-no-js']);
 }
 if( $post->post_type == 'cpt-01-03' ) {
  unset($actions['inline hide-if-no-js']);
 }
 if( $post->post_type == 'cpt-01-04' ) {
  unset($actions['inline hide-if-no-js']);
 }
 if( $post->post_type == 'cpt-01-05' ) {
  unset($actions['inline hide-if-no-js']);
 }
    return $actions;
}

if (is_admin()) {
 add_filter('post_row_actions','remove_quick_edit',10,2);
}
?>