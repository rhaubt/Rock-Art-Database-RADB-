<?php
// ***** User Profile Fields - Change/Add Fields *****
// ***** Backend Profile - change and add fields *****

function new_contactmethods( $contactmethods ) {
$contactmethods['department'] = 'Department or University';
$contactmethods['linkedin'] = 'LinkedIn';
$contactmethods['academia'] = 'Academia.edu';
$contactmethods['facebook'] = 'Facebook';
$contactmethods['twitter'] = 'Twitter';
unset($contactmethods['aim']);
unset($contactmethods['yim']);
unset($contactmethods['jabber']);

return $contactmethods;
}
?>