<?php 
	/*Template Name: Building*/

	get_header();

?>

<?php 

$directory_path =  get_template_directory_uri();?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<?php if($feat_image): ?>
	
<section id="inner-banner" class="inner-top-bg" style="background-image: url('<?php echo $feat_image;?>');">
</section>

<?php endif;?>
<!-- /#inner-banner -->

<section id="about-main" class="inner-sec space-120" style="background: url(<?php echo get_template_directory_uri(); ?>/src/img/about.png) 40px 78% no-repeat fixed;">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mb-50 b-anim">

			<?php if(get_field('page_subtitle')): ?>

			<h2><?php the_field('page_subtitle');?></h2>

			<?php endif; ?>
			<p class="top-line"></p>
		</div>

		<div class="col-md-4 pl-md-0 b-anim">
			<figure>

				<?php if(get_field('content_top_left_img')): ?>

				<img src="<?php the_field('content_top_left_img'); ?>" alt="">

				<?php endif; ?>

			</figure>
		</div>
		<?php 
		if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); ?>

								<?php the_content();?>

							</div>			
	<?php 		endwhile; 
		else : ?>

		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>
	</div>
</div>
</section>
<!-- /#about-main-->


<section id="ab-gallery-img1" class="ab-gl-wallSec b-anim" style="background: url(<?php echo $directory_path; ?>/src/img/about.png) 40px 78% no-repeat fixed;">
	<div class="space-70">
		<figure class="gl-lg-wall">
			<?php if(get_field('second_section_image')): ?>

			<img src="<?php the_field('second_section_image'); ?>" alt="<?php the_field('second_image_right_content'); ?>">

			<?php endif;?>

			<figcaption class="caption">
				<?php if(get_field('second_image_right_content')): ?>

				<h3><?php the_field('second_image_right_content'); ?></h3>

				<?php endif;?>

			</figcaption>
		</figure>
	</div>


	<div class="space-70">
		<figure class="gl-md-wall b-anim">

			<?php if(get_field('third_section_image')): ?>

				<img src="<?php the_field('third_section_image'); ?>" alt="Bulding image three">

			<?php endif;?>

		</figure>
	</div>
</section>
<!-- /#ab-gallery-img -->


<section id="abot-sec2" class="space-120 b-anim">
<div class="container-fluid">
	<div class="row">

	<div class="col-md-6 list-type-2 pl-md-0">
		<?php
	
				/* Fourth Section */
	
				$rows_fourt_left = get_field('fourth_section_left_content'); 
	
				if($rows_fourt_left):
	
				?>	
	<ul>
	
		<?php foreach($rows_fourt_left as $row_fourt_left) : ?>
	
		<li>
			<div class="wdh-50 left"><span><?php echo $row_fourt_left['founrt_left_content']; ?></span></div>
			<div class="wdh-50 right"><?php echo $row_fourt_left['right_content']; ?></div>
		</li>
		<?php endforeach;?>	
	</ul>
		<?php endif; ?>
		</div>
	<!-- /.col-md-6 -->

	<div class="col-md-6">
		<figure>
			<?php if(get_field('content_right_image')): ?>

				<img src="<?php the_field('content_right_image'); ?>" >

			<?php endif;?>
		</figure>
	</div>
	<!-- /.col-md-6 -->
</div>
</div>
</section>
<!-- /#abot-sec2 -->

<section id="about-sec3" class="inner-sec scroll-next" style="background: url(<?php echo $directory_path; ?>/src/img/architects.png) 40px 78% no-repeat fixed;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="content left-col">
					<?php

					if(get_field('fifth_section_content')): the_field('fifth_section_content'); endif;

					 ?>	
					<p class="top-line"></p>

					<?php

					/* Fifith tab section */

					$rows_fifth_tab_content = get_field('fifth_section_tab_content'); 

					if($rows_fifth_tab_content):

					?>	
					<div class="ord-tab-list">

						<?php 

						$count_tab_name = 0;

						foreach($rows_fifth_tab_content as $row_fifth_tab_content) : 

						$count_tab_name ++;?>

						<a href="#acrti<?php echo $count_tab_name;?>" class="active"><?php echo $row_fifth_tab_content['tab_name']; ?></a>

						<?php endforeach; ?>

					</div>

				</div>
			</div>
			<!-- /.col-md-4 -->

				<div class="col-md-8">

					<?php 

					$count_tab_content = 0;

					foreach($rows_fifth_tab_content as $row_fifth_tab_content) : 

					$count_tab_content ++;
					?>
						<div id="acrti<?php echo $count_tab_content;?>" class="ord-tab-item b-anim">

						<?php echo $row_fifth_tab_content['tab_content']; ?>

						</div>

					<?php endforeach; ?>
						

				</div>

			<?php endif; ?>

				<!-- /.col-md-8 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
</section>
<!-- /#about-sec3.inner-sec -->

<?php if(get_field('six_section_img')): ?>

	<section id="ab-bg-img1" class="bg-hme b-anim" style="background: url('<?php the_field('six_section_img'); ?>') no-repeat center;"></section>

<?php endif;?>

<!-- #ab-bg-img2 -->

<section id="about-sec4" class="inner-sec space-120 mb-150 b-anim">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="content">
					<?php

					/* Bottom Left Content */

					 if(get_field('bottom_content_left')): 

					 	the_field('bottom_content_left') ;

					 endif; 

					 ?>
					<p class="top-line"></p>	
				</div>
			</div>
			<!-- /.col-md-4 -->

			<div class="col-md-8">
				<div class="w-content">	

					<?php

					/* Bottom Right Content */

					 if(get_field('bottom_content_right')): 

					 	the_field('bottom_content_right') ;

					 endif; 

					 ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>