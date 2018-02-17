<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Kahuna
 */

get_header(); ?>

  
	<?php	
	
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		if ($post->ID != 0) {
			echo '<div class = "pageHeaderImage" style = "background-image: url('.$url.')"></div>';
		}
	   ?>
   
	<div id="container" class="<?php echo kahuna_get_layout_class(); ?>">
	
		<main id="main" role="main" class="main">
			<?php
				//If page is Leadership, adds custom post types for leaders 
				$pageTitle =  get_the_title(); 
				
				$targetPage = 'Leadership';
				
				if ($pageTitle == $targetPage) {
					?>
					<div id = "leadershipContainer">
							<?php
								if ( is_active_sidebar( 'leadership_sidebar_box' ) ) : ?>	
										<?php dynamic_sidebar('leadership_sidebar_box')  ?>
									
								<?php endif; ?>
					
					</div>
					<?php
				}
			
			?>

			<?php cryout_before_content_hook(); ?>
			 	
			<?php get_template_part( 'content/content', 'page' ); ?>

			<?php cryout_after_content_hook(); ?>
			
			
			
			
		</main><!-- #main -->

		<?php /*kahuna_get_sidebar(); */?>
		
		
	
		
		
		
		

	</div><!-- #container -->
		
		<?php
			//if page isn't Leadership, Donate Now, or Donate Information display Support Matters Area
			$pageTitle =  get_the_title(); 
			$targetPage = 'Leadership';
			$targetPageTwo = 'Donate Now';
			$targetPageThree = 'Donate Information';
			/*
			$pageID = get_the_id();
			echo $pageID;
			*/
	
			if ($pageTitle != $targetPage && $pageTitle != $targetPageTwo && $pageTitle != $targetPageThree) {		
				
		?>
				<div id = "rightBox">
					
					<div id = "sidebarContainer">
					  <!--Red box that says "Your support matters" -->
					  <a href = "<?php echo get_page_link(1723); ?>">
						<div class = "pageSupportMatters"><div id = "DonateText">DONATE NOW</div></div>
					  </a>
						<?php
								if ( is_active_sidebar( 'indiv_sidebar_box' ) ) : ?>	
										<?php dynamic_sidebar('indiv_sidebar_box')  ?>
									
								<?php endif; ?>
					
					</div>
				
				</div>
				
		<?php
			}
		?>
		
		
		<?php
			//If page is "Donate Now" page.
			if ($pageTitle == $targetPageTwo || $pageTitle == $targetPageThree) {
		?>
			<div id = "rightBox">
				<div id = "sidebarContainer">
					<h1 id  ="WhatCan"> What can your donations do for NCC? </h1>
					<hr>
					
					<?php
						if ( is_active_sidebar( 'Donation_sidebar_box' ) ) : ?>	
							<?php dynamic_sidebar('Donation_sidebar_box')  ?>
										
					<?php endif; ?>
					

				</div>
				
			</div>
				
				
		<?php		
				
				
			}
		?>
		
<?php get_footer();
