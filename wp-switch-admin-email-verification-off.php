<?php
/*
Plugin Name: WP Switch Admin Email Verification Off
Plugin URI: https://www.digishock.com
Version: 1.0
Author: Digishock
Author URI: https://www.digishock.com
Description: WP Switch Admin Email Verification off stops WordPress from asking about e-mail verification every six months or so.
*/

add_filter( 'admin_email_check_interval', '__return_false' );
?>