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

    <div class="main-content">
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
    </div>
</main>
<?php get_footer(); ?>