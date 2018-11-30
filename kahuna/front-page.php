<?php
/**
 * The template for displaying the landing page/blog posts
 * The functions used here can be found in includes/landing-page.php
 *
 * @package Kahuna
 */

$kahuna_landingpage = cryout_get_option( 'kahuna_landingpage' );

if ( is_page() && ! $kahuna_landingpage ) { 
	include( get_page_template() );
	return true;
}

if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
} else {

	get_header(); ?>
	
	
	<div id="container" class="kahuna-landing-page one-column">
			
		<main id="main" role="main" class="main">
		
		
		<?php

		if ( $kahuna_landingpage ) {
			kahuna_lpslider();
			?>
			
			
			<!--Container for Video Widget -->
			<div class = "videoContainer">
				<?php
					if ( is_active_sidebar( 'video_box' ) ) : ?>	
							<?php dynamic_sidebar('video_box')  ?>
						
					<?php endif; ?>
			
			
			</div>
			
			<!--Container for "Our Story" text -->
			<div class = "ourStoryContainer">
				<?php
					if ( is_active_sidebar( 'our_story_box' ) ) : ?>	
							<?php dynamic_sidebar('our_story_box')  ?>
						
					<?php endif; ?>
			
			</div>
			
			
			
			
			
			
			
			<!--Contains the widget area, "About NCCELC" -->
			<div class = "about_nccelc_container">	
				<h1 id = "AboutNccelcTitle">ABOUT NCCELC</h1>
				
				<hr class = "tealLine">
				
				<?php
					if ( is_active_sidebar( 'about_nccelc_box' ) ) : ?>	
							<?php dynamic_sidebar('about_nccelc_box')  ?>
						
					<?php endif; ?>
			</div>	
				
				<!--Area for Recent News -->
				<div class = "recent_news_container">
					<h1 id = "NewsTitle" class = "News_Support_Title">News From NCC</h1>
					<hr class = "BlackLine">
					<?php
					if ( is_active_sidebar( 'recent_news_box' ) ) : ?>	
							<?php dynamic_sidebar('recent_news_box')  ?>
						
					<?php endif; ?>
				</div>
				
				
				
				<div id = "partnersContainer">
					<h1 id = "Partners">Partners</h1>
					<div id = "partnersInnerContainer">
		
						
						<div class = "Sponsor">
							<img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/09/Meltzer-Group.jpg" class = "partnersImages">
						</div>
						<div class = "Sponsor">
							<img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/09/start-strong.png" class = "partnersImages">
						</div>
						<div class = "Sponsor">
							<img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/09/OSSE.png" class = "partnersImages">
						</div>
						<div class = "Sponsor">
						    <img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/09/bainum.png" class = "partnersImages">	
						</div>
						<!--
						<div class = "Sponsor">
						    <img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/09/whole-foods.jpg" class = "partnersImages">	
						</div>
						-->
						<div class = "Sponsor">
						    <img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/11/Two-6-Foundation.jpg" class = "partnersImages">	
						</div>
						<div class = "Sponsor">
						    <img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2018/01/Enterprise.jpg" class = "partnersImages">	
						</div>
							<div class = "Sponsor" id = "lastSponsor">
						    <img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2017/11/Park.jpg" class = "partnersImages">	
						</div>
						
						
					
						
						
					</div>
				</div>
				
				<!--area with ncc logo and small nav menu -->
				<div id = "bottomAreaContainer">
					<div id = "InnerBottomContainer">
						<div id = "nccGuideContainer">
							<div id = "nccLogo">
								<img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2015/06/ncc-logo-thumb.jpg" class = "partnersImages">
							</div>
							
							<div id = "GuideStar">
								<img src = "http://sleonproductions.com/sp-clients/ncc/2018/wp-content/uploads/2015/08/Guide-Star-Logo.gif" class = "partnersImages">
							</div>
						</div>
						
						<div id = "bottom_menu_container">
							<h1 class = "BottomTitle">About Us</h1>
							<?php wp_nav_menu( array( 
								'theme_location' => 'new-menu',
								'container_class' => 'bottom_menu' 

								) ); 
							?>
						</div>
						
						
						<!--social media container -->
						<div class = "social_container">
							<h1 class = "BottomTitle">Connect With Us</h1>
							<?php
								if ( is_active_sidebar( 'social_box' ) ) : ?>	
										<?php dynamic_sidebar('social_box')  ?>
									
								<?php endif; ?>
						</div>	
					
					</div>
				</div>
				
				<!--
				<div id = "footerBar">
					<div id = "footerCopy">	&copy; 2018 National Childrens Center. All rights reserved</div>
						
				</div>
				-->
				
			<?php
			/*
			kahuna_lpblocks();
			kahuna_lptext('one');
			kahuna_lpboxes(1);
			kahuna_lptext('two');
			kahuna_lpboxes(2);
			kahuna_lptext('three');
			kahuna_lpindex();
			kahuna_lptext('four');
			*/
		} else {
			kahuna_lpindex();
		}
			
		?>
		
	
		
		</main><!-- #main -->
		<?php if ( ! $kahuna_landingpage ) { kahuna_get_sidebar(); } ?>
	</div><!-- #container -->

	
		
	
	
	<?php get_footer();
} //else !posts
