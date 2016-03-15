<?php
//// include in header.php in <title></title>

$type = get_post_type();
if ( 'cpt-00-01' == $type )
echo 'Resource:', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-00-02' == $type )
echo 'Wikipedia: ', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-00-03' == $type )
echo 'UNESCO: ', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-01-01' == $type )
echo 'NEWS: ', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-01-02' == $type )
echo 'Project: ', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-01-03' == $type )
echo 'Place: ', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-01-04' == $type )
echo 'Site: ', the_field('RAE_0003', '| Rock-Art Database');
elseif ( 'cpt-01-05' == $type )
echo 'Item: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'page' == $type )
echo the_title(), '| Rock-Art Database';
?>