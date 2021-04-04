<?php get_header(); ?>
<main class="main-content">
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="content" role="main">
					<?php the_post(); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php get_search_form(); ?>
					<h2>Archives by Month:</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					<h2>Archives by Subject:</h2>
					<ul>
						 <?php wp_list_categories(); ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>