<?php
/*
Template Name: Section
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
				<div class="col-sm-3 col-md-2 sidebar" style="position:absolute; border: 2px solid #000;  min-height:800px;">
            		<div style="margin:0px auto; float:left; border-bottom: 1px solid #292929; background-color: #e1e1e1; height:30px; 
                    width:49%; display:inline-block;"> <p style="text-align:center; width:100%;">LATEST</p></div>
                    <div style="margin:0px auto; border-bottom: 1px solid #292929; background-color: #999; height:30px; width:49%; 
                    display:inline-block;"><p style="text-align:center; width:100%;">POPULAR</p>
                    </div>
                    <div style="margin:0px auto; border-bottom: 1px solid #292929; height:60px; width:100%; display:block;">
                    
                    </div>
                    <div style="margin:0px auto; border-bottom: 1px solid #292929; height:60px; width:100%; display:block;">
                    </div>
                    <div style="margin:0px auto; border-bottom: 1px solid #292929; height:60px; width:100%; display:block;">
                    </div>
                 
            	</div>
				<div  class="col-sm-9 col-sm-offset-3  " style="padding-left:40px;" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

							<div class="jumbotron" style="background-image: url('http://www.asapmob.com/wp-content/uploads/2013/06/Screen-shot-2013-06-18-at-12.31.47-PM-1.png'); background-repeat: no-repeat; background-position: center;">
				
								<div class="page-header">
									<h1><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
								</div>				
								
							</div>
						
						</header>
						
						<section class="row post_content">
						
							<div class="col-sm-8">
						
								<?php the_content(); ?>
								
							</div>
							
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>