<?php
/**
 * Plugin Name:       WPGraphQL The SEO Framework
 * Plugin URI:        https://github.com/findcanary/wp-graphql-the-seo-framework/
 * Description:       Adds The SEO framework support to the WPGraphQL Plugin for posts, pages and custom post types.
 * Version:           0.1.0
 * Requires at least: 5.0
 * Requires PHP:      7.3
 * Author:            Henrik Wirth, FindCanary.com
 * Author URI:        https://findcanary.com
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wp-graphql-the-seo-framework
 *
 * @package wp-graphql-the-seo-framework
 * @category WPGraphQL_Extension
 * @author Henrik Wirth, FindCanary.com
 * @license  http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @link     https://github.com/fincanary/wp-graphql-the-seo-framework
 * @version 0.1.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


/**
 * Instantiate the TaxQuery class on graphql_init
 * @return WPGraphQL\Extensions\TheSeoFramework
 */
function wp_graphql_init_the_seo_framework()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-wp-graphql-the-seo-framework.php';

    return new WPGraphQL\Extensions\TheSeoFramework();
}

wp_graphql_init_the_seo_framework();
