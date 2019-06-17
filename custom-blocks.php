<?php
/**
 * Plugin Name: Custom Gutenberg Blocks
 * Description: This contains some custom Gutenberg blocks - Please note that ACF Pro should be installed.
 * Version:     0.0.1
 * Author:      Ash Whiting
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    customGutenbergBlocks
 * @since      1.0.1
 * @copyright  Copyright (c) 2019, Ash Whiting
 * @license    GPL-2.0+
 */

// Plugin directory

define( 'CB_DIR' , plugin_dir_path( __FILE__ ) );

// Block list

require_once( CB_DIR . '/blocks/team-member/block-team-member.php' );