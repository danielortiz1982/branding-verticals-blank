<?php /* Template Name: full */ ?>
<?php get_header(); ?>
<main class="main-content">
	<section class="container-fluid p-0">
		<div class="row">
			<div class="col-md-12">
				<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
				<div class="<?php the_ID(); ?>" id="<?php the_ID(); ?>">
					<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" /></a></div>
					<div class="the-content"><?php the_content(); ?></div>
				</div>
				<?php endwhile ?>
				<?php endif ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>