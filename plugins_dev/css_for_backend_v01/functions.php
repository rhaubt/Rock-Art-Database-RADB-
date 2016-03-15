<?php
// ***** Backend CSS *****

function custom_colors() {
 global $user_level;
 if ($user_level != '10' ) {
    echo '<style type="text/css">
      .postbox {
       margin-bottom: 1px;
       border: 0px;
       background-color:#282828
      }
      #poststuff h3 {
       color: #e0e0e0;
      }
   #poststuff .inside {
       background-color:#c9c9c9;
       color: #282828;
     }
     .acf_postbox {
       background-color: #282828;
       padding-left: 0px;
       padding-right: 0px;
     }
     .acf_postbox p.label {
       display: none;
     }
/* General Pencil Dashicon ACF Accordion Tab */
     .dashicons-arrow-right:before {
       content: "\f464";
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* General Calendar Dashicon ACF Accordion Tab */
     .dashicons-arrow-calendar:before {
       content: "\f508";
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* General Media Dashicon ACF Accordion Tab */
     .dashicons-arrow-media:before {
       content: "\f104";
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* General Social Media Dashicon ACF Accordion Tab */
     .dashicons-arrow-socialmedia:before {
       content: "\f237";
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* Video Video Upload Dashicon ACF Accordion Tab */
     .dashicons-arrow-videos:before {
       content: "\f234";
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* Video YouTube Dashicon ACF Accordion Tab */
     .dashicons-arrow-youtube:before {
       content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png);
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* 3D Autodesk Dashicon ACF Accordion Tab */
     .dashicons-arrow-3dautodesk:before {
       content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png);
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* 3D x3d Dashicon ACF Accordion Tab */
     .dashicons-arrow-x3d:before {
       content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png);
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* 3D Google Earth Dashicon ACF Accordion Tab */
     .dashicons-arrow-earth:before {
       content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png);
       padding: 5px 5px 5px 0px;
       float: left;
     }
/* Example End */
     .acf_postbox > .inside > .field {
      padding: 7px 7px;
       }
     #poststuff h2 {
       color: #282828;
       font-size:14px !important;
       font-weight: normal;
     margin-top: 5px;
     padding: 3px 0px 3px 14px !important;
      font-size: 1.5em;
      margin-bottom: 0px;
      clear: left;
      background-color: #efefef;
      box-shadow: 
  0px 0px 0px 1px rgba(155,155,155,0.3), 
  0px 0px 0px 0px rgba(255,255,255,0.9) inset, 
  0px 2px 2px rgba(0,0,0,0.1);
}
   </style>';
   }
}

add_action('admin_head', 'custom_colors');
?>