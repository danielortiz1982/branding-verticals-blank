<?php /* Template Name: Blog Cards */ ?>
<?php get_header(); ?>
<main class="site-content">
	<div class="container">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="<?php the_ID(); ?>" id="<?php the_ID(); ?>">
			<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			<div class="the-content"><?php the_content(); ?></div>
		</div>
		<?php endwhile ?>
		<?php endif ?>
	</div>
</main>

<main class="site-content">
	<div class="container">
        <section class="row news-section-card">
            <?php $args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-4 card-item">
                <div class="card">
                    <a href="<?php the_permalink()?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </section>
	</div>
</main>

<?php get_footer(); ?>