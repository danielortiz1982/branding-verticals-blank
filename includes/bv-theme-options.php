<?php

// create custom plugin settings menu
add_action('admin_menu', 'bv_opt_menu');

function bv_opt_menu() {
	add_menu_page('Branding Verticals Theme Options', 'BV options', 'administrator', __FILE__, 'bv_opt_page'  ); //plugins_url('/images/icon.png', __FILE__)
	add_action( 'admin_init', 'register_bv_theme_options' );
}


function register_bv_theme_options() {
	register_setting( 'bv-opt-group', 'nav_color_opt' );
	register_setting( 'bv-opt-group', 'nav_txt_color_opt' );
	register_setting( 'bv-opt-group', 'header_color_opt' );
	register_setting( 'bv-opt-group', 'anchor_color_opt' );
	register_setting( 'bv-opt-group', 'header_size_opt' );
	register_setting( 'bv-opt-group', 'subheader_size_opt' );
	register_setting( 'bv-opt-group', 'body__txt_size_opt' );
	register_setting( 'bv-opt-group', 'social_facebook_opt' );
	register_setting( 'bv-opt-group', 'social_twitter_opt' );
	register_setting( 'bv-opt-group', 'social_youtube_opt' );
	register_setting( 'bv-opt-group', 'social_linkedin_opt' );
	register_setting( 'bv-opt-group', 'social_instagram_opt' );
	register_setting( 'bv-opt-group', 'social_email_opt' );

}

function bv_opt_page() {
?>

<div class="theme-opt-wrapper">
	<div class="theme-opt-logo"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png"></div>
	<h1>Theme Options</h1>
	<hr />
	<form method="post" action="options.php">
	    <?php settings_fields( 'bv-opt-group' ); ?>
	    <?php do_settings_sections( 'bv-opt-group' ); ?>
	    <h2>color settings</h2>
	    <div class="form-box">

	    	<div class="form-component">
	    		<label for="header_color_opt">Header Color:</label>
	    		<input type="color" name="header_color_opt" value="<?php echo esc_attr( get_option('header_color_opt') ); ?>" />
	    	</div>

	    	<div class="form-component">
	    		<label for="nav_color_opt">Navigation Color:</label>
	    		<input type="color" name="nav_color_opt" value="<?php echo esc_attr( get_option('nav_color_opt') ); ?>" />
	    	</div>

	    	<div class="form-component">
	    		<label for="nav_txt_color_opt">Navigation Text Color:</label>
	    		<input type="color" name="nav_txt_color_opt" value="<?php echo esc_attr( get_option('nav_txt_color_opt') ); ?>" />
	    	</div>

	    	<div class="form-component">
	    		<label for="anchor_color_opt">Link Color:</label>
	    		<input type="color" name="anchor_color_opt" value="<?php echo esc_attr( get_option('anchor_color_opt') ); ?>" />
	    	</div>

	    </div>

	    <h2>font settings</h2>

	    <div class="form-box">

	    	<div class="form-component">
	    		<label for="header_size_opt">header size</label>
	    		<input type="number" name="header_size_opt" value="<?php echo esc_attr( get_option('header_size_opt') ); ?>" /> <b>PX</b>
	    	</div>

	    	<div class="form-component">
	    		<label for="subheader_size_opt">Subheader size</label>
	    		<input type="number" name="subheader_size_opt" value="<?php echo esc_attr( get_option('subheader_size_opt') ); ?>" /> <b>PX</b>
	    	</div>

	    	<div class="form-component">
	    		<label for="body__txt_size_opt">body text size</label>
	    		<input type="number" name="body__txt_size_opt" value="<?php echo esc_attr( get_option('body__txt_size_opt') ); ?>" /> <b>PX</b>
	    	</div>


	    </div>

	    <h2>social settings</h2>

	    <div class="form-box">
	    	<div class="form-component">
	    		<i class="fab fa-facebook-square"></i>
	    		<label for="social_facebook_opt"><input type="checkbox" name="facebook"> facebook</label>
	    		<input type="text" placeholder="facebook.com/user" name="social_facebook_opt" value="<?php echo esc_attr( get_option('social_facebook_opt') ); ?>" />

	    	</div>

	    	<div class="form-component">
	    		<object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/svg/twitter.svg">Sorry SVG is not supported</object>
	    		<label for="social_twitter_opt"><input type="checkbox" name="twitter"> twitter</label>
	    		<input type="text" placeholder="twitter.com/user" name="social_twitter_opt" value="<?php echo esc_attr( get_option('social_twitter_opt') ); ?>" />

	    	</div>

	    	<div class="form-component">

	    		<object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/svg/youtube.svg">Sorry SVG is not supported</object>
	    		<label for="social_youtube_opt"><input type="checkbox" name="youtube"> youtube</label>
	    		<input type="text" placeholder="youtube.com/user" name="social_youtube_opt" value="<?php echo esc_attr( get_option('social_youtube_opt') ); ?>" />
	    	</div>

	    	<div class="form-component" id="linkedin">
	    		<object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/svg/linkedin.svg">Sorry SVG is not supported</object>
	    		<label for="social_linkedin_opt"><input type="checkbox" name="linkedin"> linkedin</label>
	    		<input type="text" placeholder="linkedin.com/user" name="social_linkedin_opt" value="<?php echo esc_attr( get_option('social_linkedin_opt') ); ?>" />
	    	</div>

	    	<div class="form-component">
	    		<object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram.svg">Sorry SVG is not supported</object>
	    		<label for="social_instagram_opt"><input type="checkbox" name="linkedin"> instagram</label>
	    		<input type="text" placeholder="instagram.com/user" name="social_instagram_opt" value="<?php echo esc_attr( get_option('social_instagram_opt') ); ?>" />
	    	</div>

	    	<div class="form-component">
	    		<object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/svg/email.svg">Sorry SVG is not supported</object>
	    		<label for="social_email_opt"><input type="checkbox" name="email"> email</label>
	    		<input type="text" placeholder="sample@myemail.com" name="social_email_opt" value="<?php echo esc_attr( get_option('social_email_opt') ); ?>" />
	    	</div>


	    </div>
	    
	    <div class="form-box">
	    	<div class="form-component"><?php submit_button(); ?></div>
	    </div>
	</form>
</div>

<?php } ?>

