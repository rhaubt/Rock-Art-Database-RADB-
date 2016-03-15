<?php
// Hide Library and URL Tab - source: https://wordpress.org/support/topic/hide-media-upload-library-tabs-leave-url-tab


function remove_media_library_tab($tabs) {
    unset($tabs['library']);
    return $tabs;
}
add_filter('media_upload_tabs', 'remove_media_library_tab');
?>