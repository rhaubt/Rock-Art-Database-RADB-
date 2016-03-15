<?php
// ***** Remove Metaboxes on Post Admin Area *****
// ***** Remove Metabox 'Slug' *****

add_action( 'add_meta_boxes', 'my_add_meta_boxes' );
function my_add_meta_boxes() {
    remove_meta_box( 'slugdiv', 'cpt-01-01', 'normal' );
}
?>