<?php /* Template Name: Blog List */ ?>
<?php get_header(); ?>
<main class="site-content">
	<div class="container">
        <?php $args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section class="row news-section-list">
            <div class="col-md-3">
                <div class="post-thumbnail"><a href="<?php the_permalink()?>"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"></a></div>
            </div>

            <div class="col-md-9">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
                <h6><a href="<?php the_permalink(); ?>">Read More...</a></h6>
            </div>
        </section>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
	</div>
</main>
<?php get_footer(); ?>