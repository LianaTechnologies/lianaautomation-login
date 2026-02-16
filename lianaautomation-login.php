<?php
/**
 * Plugin Name:       LianaAutomation Login
 * Description:       LianaAutomation Login Tracking for WordPress
 * Version:           1.0.6
 * Requires at least: 6.5
 * Requires PHP:      8.0
 * Author:            Liana Technologies Oy
 * Author URI:        https://www.lianatech.com
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0-standalone.html
 * Text Domain:       lianaautomation
 * Domain Path:       /languages
 *
 * PHP Version 8.0
 *
 * @package  WordPress
 * @license  https://www.gnu.org/licenses/gpl-3.0-standalone.html GPL-3.0-or-later
 * @link     https://www.lianatech.com
 */

/**
 * Include cookie handler code
 */
require_once dirname( __FILE__ ) . '/includes/lianaautomation-cookie.php';

/**
 * Include WordPress login handler code
 */
require_once dirname( __FILE__ ) . '/includes/lianaautomation-login.php';

/**
 * Conditionally include admin panel code
 */
if ( is_admin() ) {
	require_once dirname( __FILE__ ) . '/admin/class-admin-notices.php';
	new \LianaAutomation_Login\Admin_Notices();
	require_once dirname( __FILE__ ) . '/admin/class-lianaautomation-login.php';
}
