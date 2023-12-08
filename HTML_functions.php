<?php

class HTMLfunctions {

	public static function checkboxFunctionsHtml( $args ) { ?>
		<?php $name = $args['checkBoxName']; ?>
			<input type="checkbox" name="<?php echo $name; ?>" value="1" <?php checked( get_option( $name ), '1' ) ?>>
	<?php }

	public static function headlineHTML() { ?>
			<input type="text" name="wcp_headline" value="<?php echo esc_attr( get_option( 'wcp_headline' ) ) ?>">
	<?php }

	public static function locationHTML() { ?>
			<select name="wcp_location">
				<option value="0" <?php selected( get_option( 'wcp_location' ), '0' ) ?>>Beginning of post</option>
				<option value="1" <?php selected( get_option( 'wcp_location' ), '1' ) ?>>End of post</option>
			</select>
	<?php }


	public static function ourHTML() { ?>
			<div class="wrap">
				<h1>Word Count Settings</h1>
				<form action="options.php" method="POST">
			<?php
			settings_fields( 'wordcountplugin' );
			do_settings_sections( 'word-count-settings' );
			submit_button();
			?>
				</form>
			</div>
	<?php }
}