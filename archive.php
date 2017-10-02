<?php get_header(); ?>
			
	<div id="content">

	<div class="kirin">
	<div class="kirin-inner">
	
		<div id="inner-content" class="row collapse">
		
		    <main id="main" class="columns" role="main">
			    
		    	<header>
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<?php // get_sidebar(); ?>
	    
	    </div> <!-- end #inner-content -->

	</div><!-- end .kirin-inner -->

	</div><!-- end .kirin -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>