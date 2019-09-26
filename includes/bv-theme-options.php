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
	    <h2>Theme Color settings</h2>
	    <div class="form-box">

	    	<div class="form-component">
	    		<label for="">Header Color:</label>
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
	    
	    <div class="form-box">
	    	<div class="form-component"><?php submit_button(); ?></div>
	    </div>
	</form>
</div>

<?php } ?>

