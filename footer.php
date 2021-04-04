<footer class="footer">
    <section class="container">
    	<div class="row">
    		<h6><?php echo date('Y'); ?> &copy; <?php echo "BV Blank All Rights Reserved."; ?></h6>
    		<div class="footer-social">
    			<a target="_blank" href="<?php echo esc_attr( get_option('social_facebook_opt') ); ?>"><i class="fab fa-facebook-square"></i></a>
    			<a target="_blank" href="<?php echo esc_attr( get_option('social_twitter_opt') ); ?>"><i class="fab fa-twitter-square"></i></a>
    			<a target="_blank" href="<?php echo esc_attr( get_option('social_youtube_opt') ); ?>"><i class="fab fa-youtube-square"></i></a>
    			<a target="_blank" href="<?php echo esc_attr( get_option('social_instagram_opt') ); ?>"><i class="fab fa-instagram"></i></a>
    			<a target="_blank" href="<?php echo esc_attr( get_option('social_linkedin_opt') ); ?>"><i class="fab fa-linkedin"></i></a>
    			<a target="_blank" href="<?php echo esc_attr( get_option('social_email_opt') ); ?>"><i class="fas fa-envelope-square"></i></a>
    		</div>
    	</div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>