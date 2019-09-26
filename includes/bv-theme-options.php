<?php

// create custom plugin settings menu
add_action('admin_menu', 'bv_opt_menu');

function bv_opt_menu() {
	add_menu_page('Branding Verticals Theme Options', 'BV options', 'administrator', __FILE__, 'bv_opt_page'  ); //plugins_url('/images/icon.png', __FILE__)
	add_action( 'admin_init', 'register_bv_theme_options' );
}


function register_bv_theme_options() {
	register_setting( 'bv-opt-group', 'nav_color_opt' );
	register_setting( 'bv-opt-group', 'some_other_option' );
	register_setting( 'bv-opt-group', 'option_etc' );
	register_setting( 'bv-opt-group', 'logo');
}

function bv_opt_page() {
?>

<div class="theme-opt-wrapper">
	<h1>Branding Vericals Theme Options</h1>
	<hr />
	<form method="post" action="options.php">
	    <?php settings_fields( 'bv-opt-group' ); ?>
	    <?php do_settings_sections( 'bv-opt-group' ); ?>
	    <h2>Theme settings</h2>
	    <div class="form-box">
	    	<div class="form-component">
	    		<label>Navigation Color:</label>
	    		<input type="color" name="nav_color_opt" value="<?php echo esc_attr( get_option('nav_color_opt') ); ?>" />
	    	</div>
	    </div>


	    <?php submit_button(); ?>
	</form>
</div>

<?php } ?>

