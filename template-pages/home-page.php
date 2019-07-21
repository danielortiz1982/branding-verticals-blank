<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<main class="site-content">
    <div class="home-slider">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $args = array('post_type' => 'bv_theme_slider', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="carousel-item <?php if($the_query->current_post == 0) echo 'active' ?>">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>