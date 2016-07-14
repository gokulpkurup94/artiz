<?php get_header(); ?>
  <body>
  <div id="page">
    <div id="leftsider">
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
		<div class="contentarea">
		<ul id="featwork">
        	<li><a href="#fifth" title="Portrat Art"><span></span><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""

			 ></img></a></li>
           	<!--<li><a href="#" title="Flower Art"><span></span><img src="<?php echo get_template_directory_uri(); ?>/img/art2.jpg" width="335" height="250" /></a></li>
			<li><a href="#sixth" title="African Art"><span></span><img src="<?php echo get_template_directory_uri(); ?>/img/art3.jpg" width="200" height="250" /></a></li>-->
        </ul>
		
      	</div>
		<div id="quote">
		  <h3> &quot; <? echo get_bloginfo('description'); ?>  &quot; </h3>
      	</div>
    </div>
	<div id="arrows">
     	<ul>
			<li id="left"><a href="javascript://" title="go left">go left</a></li>
			<li id="right"><a href="javascript://" title="go right">go right</a></li>
		</ul>	
    </div>
	<hr/>
	 <div class="par alt" id="second">
        <div class="africanarea">
		
		<?php
				if ( have_posts() ) :
				// Start the Loop.
				 the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				
				// Previous/next post navigation.
				

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>


		
			
		</div>
        </div>
      <div class="par" id="third">
        <div class="africanarea">
		<?php
				if ( have_posts() ) :
				// Start the Loop.
				 the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				
				// Previous/next post navigation.
				

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
		</div>
        
      </div>
      <div class="par alt" id="fourth">
        <div class="africanarea">
		<?php
				if ( have_posts() ) :
				// Start the Loop.
				 the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				
				// Previous/next post navigation.
				

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
		</div>
        
      </div>
	 <div class="par alt" id="fifth">
        <div class="africanarea">
		

		<?php
				if ( have_posts() ) :
				// Start the Loop.
				 the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				
				// Previous/next post navigation.
				

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
		</div>
        
      </div>
      
     
      <hr/>
      <div class="par alt" id="sixth">
        <div class="africanarea">
		<<?php
				if ( have_posts() ) :
				// Start the Loop.
				 the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				
				// Previous/next post navigation.
				

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
		</div>
	</div>

	<hr/>
	<div class="par alt" id="seventh">
      <div class="collectionarea">
		<h2 id="contacttitle"><!--<a href="#">--><span></span></a></h2>
		<div id="contact">
<table width="400px" border="0" align="left" cellpadding="3" cellspacing="3">
<tbody>
      <tr>
        <td width="329" align="left" valign="top"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <div class="share">
            <div id="fb-root"></div><script src="../connect.facebook.net/en_US/all.js#appId=112855532095928&amp;xfbml=1"></script><fb:like class="fblike" href="#" send="false" layout="button_count" width="25" show_faces="false" font=""></fb:like>
            <g:plusone count="true"></g:plusone>
            <a href="http://twitter.com/share" class="twitter-share-button" id="twitter" data-count="horizontal">Tweet</a><script type="text/javascript" src="../platform.twitter.com/widgets.js"></script>
        </div>
</td>
      </tr>
      <tr>
        <td width="329" align="left" valign="top"> <p class="about">As an artist I enjoy painting with oils in bright vibrant colours giving my work a modern, and slightly pop art feel. My work tends to focus mainly on subjects that are pleasing to the eye. I enjoy painting works that I feel will enhance the atmosphere, bring colour and excitement to a room or space.</p>
           <p class="about">From childhood I have had a love for art and I continue to paint today. I have sold a number of works to corporate companies and individuals alike. </p>
           <p class="about">I have had the chance to travel extensively over the years having been in the travel industry and I am inspired by my travels and often use those images in my work. My influences come from what I see and experience.</p>
           <p class="about">I fully enjoy having the variety of themes to paint , from portraits to landscapes and I feel my style remains recognizable even though the themes in my works are so different.</p>
<p class="about2"><strong>Prices on request. Framing and delivery can be arranged.<br />
  <a href="mailto:info@clholloway.co.za?Subject=Enquiry from website">Click here to Contact Us</a></strong></p>

          
          <p class="aboutsmall"><?php  echo "&copy;" . date("Y"); ?>Artiz</p></td>
        </tr>
      
</tbody>
</table></div>

        
    </div>
	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27860397-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>

<!-- Mirrored from www.clholloway.co.za/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2016 05:09:55 GMT -->
</html>
