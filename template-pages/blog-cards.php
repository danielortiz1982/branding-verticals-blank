<?php /* Template Name: Blog Cards */ ?>
<?php get_header(); ?>
<main class="main-content">
    <section class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="the-content"><?php the_content(); ?></div>
            </div>
        </div>
    </section>
	<section class="container">
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
	</section>
</main>

<?php get_footer(); ?>