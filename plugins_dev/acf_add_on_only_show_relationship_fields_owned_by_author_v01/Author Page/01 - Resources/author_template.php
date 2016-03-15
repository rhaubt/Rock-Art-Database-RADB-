<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div id="content" class="narrowcolumn">

    <!– This sets the $curauth variable –>

    <?php
    if(isset($_GET['author_name'])) :
    $curauth = get_userdatabylogin($author_name);
    else :
    $curauth = get_userdata(intval($author));
    endif;
    ?>
	<div style="margin:50px; background-color:#e0e0e0; width:100%; height:200px;">
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <dl>
    <dt>Website</dt>
    <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
    <dt>Profile</dt>
    <dd><?php echo $curauth->user_description; ?></dd>
    <dt>Department</dt>
    <dd><?php echo $curauth->department; ?></dd>
    <dt>linkedin</dt>
    <dd><?php echo $curauth->linkedin; ?></dd>
    <dt>academia</dt>
    <dd><?php echo $curauth->academia; ?></dd>
    <dt>facebook</dt>
    <dd><?php echo $curauth->facebook; ?></dd>
    <dt>facebook</dt>
    <dd><?php echo $curauth->facebook; ?></dd>
    <dt>twitter</dt>
    <dd><?php echo $curauth->twitter; ?></dd>
    </dl>
    </div>

    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
	<div style="margin:50px; background-color:#e0e0e0; width:100%; height:200px;">
    <ul>
    <!– The Loop –>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
    <?php the_title(); ?></a>,
    <?php the_time('d M Y'); ?> in <?php the_category('&');?>
    </li>

    <?php endwhile; else: ?>
    <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>
    <!– End Loop –>

    </ul>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
