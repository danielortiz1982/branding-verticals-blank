<?php get_header(); ?>
<main class="main-content">
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
				<div class="<?php the_ID(); ?>" id="<?php the_ID(); ?>">
					<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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