<?php 
	/*Template Name: Availability*/

	get_header();

?>

<?php $directory_path =  get_template_directory_uri();?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<?php if($feat_image): ?>

	<section id="inner-banner" class="inner-top-bg" style="background-image: url('<?php echo $feat_image;?>');">
	</section>

<?php endif;?>

<section id="avail-main" class="space-120 avail-m" style="background: url(<?php echo $directory_path; ?>/src/img/availability.png) 40px 78% no-repeat fixed;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">				
				<div class="content b-anim">
					<h1 class="title"><?php the_title();?></h1>
					<p class="top-line"></p>
				</div>
			</div>
			<!-- /.col-md-4 -->


			<div class="col-md-4 b-anim">
	<?php
 		if ( have_posts() ) :

  			while ( have_posts() ) : the_post(); 

			 the_content();

			endwhile;

		endif;
	?>
			</div>
			<!-- /.col-md-8 -->

			<div class="col-md-4 b-anim">
			
			<?php if(get_field('content_left_image')): ?>

				<img  src="<?php the_field('content_left_image');?>" alt="<?php the_title(); ?>">

			<?php endif; ?>

			</div>
			<!-- /.col-md-4 -->
			
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /#avail-main -->

<section id="avail2" class="space-120 avail-2 b-anim">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-lg-4 col-lg-4 list-type-3">
				<h2 class="title">Available</h2>
				<p class="top-line"></p>
				<ul class="floor-list">
					<li id="floor1">
						<span class="num">floor 29</span>
						<span class="line"></span>
  						<span class="line-text">Suite 2950 - 6,622 Square feet <a href="#">See floorplan</a></span> 
					</li>
					<li id="floor2">
						<span class="num">floor 21</span>
						<span class="line"></span>
						<span class="line-text">Suite 2160 - 6,406 Square feet <a href="#">See floorplan</a></span> 
					</li>
					<li id="floor3">
						<span class="num">floor 20</span>
						<span class="line"></span>
						<span class="line-text">8,472 RSF <a href="#">See floorplan</a></span> 
					</li>
					<li id="floor4">
						<span class="num">floor 18</span>
						<span class="line"></span>
						<span class="line-text">Suite 1800 - 14,706 Square feet <a href="#">See floorplan</a></span> 
					</li>
					<li id="floor5">
						<span class="num">floor 09</span>
						<span class="line"></span>
						<span class="line-text">Suite 900 - 3,893 Square feet <a href="#">See floorplan</a></span> 
					</li>
					<li id="floor6">
						<span class="num">floor 01</span>
						<span class="line"></span>
						<span class="line-text">Suite 100 - 782 Square feet <a href="#">See floorplan</a></span> 
					</li>
				</ul>

				<h3 class="headline">Inquire</h3>
				<p class="more-links">
					<a href="#">CONTACT LEASING <span class="fa fa-angle-right"></span></a>
				</p>
			</div>
			<!-- /.col-md-4 -->

			<div class="col-lg-4 floor-count d-none d-lg-block">

				<div class="img-w">
					<img class="img-fluid" src="<?php echo $directory_path; ?>/src/img/avail-vert-img1.png" alt="">
					<ul>
						<li><span class="floor1">29</span></li>
						<li><span class="floor2">21</span></li>
						<li><span class="floor3">20</span></li>
						<li><span class="floor4">18</span></li>
						<li><span class="floor5">09</span></li>
						<li><span class="floor6">01</span></li>
					</ul>
				</div>
				

			</div>
			<!-- /.col-md-4 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /#avail2 -->

<?php get_footer(); ?>