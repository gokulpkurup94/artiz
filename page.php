<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package attirant
 */

get_header('post'); ?>
<div id="topcontent">
			<?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
 
        <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
 
    </a>
    <?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"  width="188" height="30px" alt="">
               
    					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					</a>
				
				
				<?php endif; ?>

<?php
wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'nav' ) );
?>

		</div>


	<div id="primary" class="content-area col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();  ?>

			<div>
<style>
ul {
    vertical-align: text-bottom;
}
ul li a {

   

    list-style-type: none;
    margin: 10px;
    padding: 0;
    overflow: hidden;
   /* background-color: #333333; */
}

li {
    float: left;
    display: inline;
}

li a {
    display: inline;
    color: white;
    
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
</style>



<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<h2 style="padding-right:50px; font-size:40px; text-align:center;"><?php the_title(); ?></h2>
 
<div style=
"padding-top:50px;">
<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
 
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
 
<p>
<small>
This entry was posted
<?php /* This is commented, because it requires a little adjusting sometimes.
You'll need to download this plugin, and follow the instructions:
http://binarybonsai.com/wordpress/time-since/ */
/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
and is filed under <?php the_category(', ') ?>.
You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
 
<?php if ( comments_open() && pings_open() ) {
// Both Comments and Pings are open ?>
You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
 
<?php } elseif ( !comments_open() && pings_open() ) {
// Only Pings are Open ?>
Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
 
<?php } elseif ( comments_open() && !pings_open() ) {
// Comments are open, Pings are not ?>
You can skip to the end and leave a response. Pinging is currently not allowed.
 
<?php } elseif ( !comments_open() && !pings_open() ) {
// Neither Comments, nor Pings are open ?>
Both comments and pings are currently closed.
 
<?php } edit_post_link('Edit this entry','','.'); ?>
 
</small>
</p>
 
</div>
</div>
	
	<?php endwhile; ?>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

