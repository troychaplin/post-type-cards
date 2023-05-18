<?php
/**
 * Plugin Name:       Post Type Cards
 * Description:       Card layout of specifically selected custom post types
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       post-type-cards
 *
 * @package           post-type-cards
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function post_type_cards_post_type_cards_block_init()
{
    register_block_type(__DIR__ . '/build');
}
add_action('init', 'post_type_cards_post_type_cards_block_init');
