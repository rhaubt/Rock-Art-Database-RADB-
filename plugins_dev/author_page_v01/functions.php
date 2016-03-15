<?php
// ***** Add Author query to author.php  to allow post search by author *****

function wpse107459_add_cpt_author( $query ) {
    if ( !is_admin() && $query->is_author() && $query->is_main_query() ) {
        $query->set( 'post_type', array('post', 'cpt-00-01', 'cpt-00-02', 'cpt-00-03', 'cpt-01-01', 'cpt-01-02', 'cpt-01-03', 'cpt-01-04', 'cpt-01-05' ) );
    }
}
add_action( 'pre_get_posts', 'wpse107459_add_cpt_author' );
?>