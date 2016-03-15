<?php
// Only count Posts in backend that are owned by Author.

// ***** Count Only Own Posts *****
function jquery_remove_counts()
{
 ?>
 <script type="text/javascript">
 jQuery(function(){
  jQuery("li.all").remove();
  jQuery("li.publish").find("span.count").remove();
  jQuery("li.trash").find("span.count").remove();
 });
 </script>
 <?php
}
add_action('admin_footer', 'jquery_remove_counts');
?>