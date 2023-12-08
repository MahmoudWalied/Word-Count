<?php

class errorSecurity {
	public static function sanitizeLocation( $input ) {
		if ( $input !== '0' and $input !== '1' ) {
			add_settings_error(
				'wcp_location',
				'wcp_location_error',
				'The location shall be either on the top or the bottom'
			);

			return get_option( 'wcp_location' );
		}

		return $input;
	}
}