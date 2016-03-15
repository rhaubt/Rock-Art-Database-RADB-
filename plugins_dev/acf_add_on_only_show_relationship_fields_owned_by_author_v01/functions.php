<?php
// ***** ACF Only Show Own Relationship Fields - add name=acf field name *****

add_filter('acf/fields/relationship/query/name=RAE_0188', 'exclude_id', 10, 3);
add_filter('acf/fields/relationship/query/name=RAE_0189', 'exclude_id', 10, 3);
add_filter('acf/fields/relationship/query/name=RAE_0190', 'exclude_id', 10, 3);

function exclude_id ( $args, $post ) { //$field input vriable wasn't neccessary in this function

    $current_user = wp_get_current_user();
 $user_id = $current_user->ID;
 $args['author']=$user_id;
 $args['authors']=$user_id;

   return $args;
}
?>