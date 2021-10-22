
<?php
/**
 * Plugin Name: WooCommerce Product Metadata
 * Plugin URI: https://danielsantoro.com
 * Description: Adds critical metadata to WooCommerce products such as Brand, GTIN, ASIN, ISBN, and more 
 * Version: 0.1.0
 * Author: Daniel Santoro
 * Author URI: https://danielsantoro.com
 * License: GPL3
 */
 
/*  Copyright Daniel Santoro  (email : hello@danielsantoro.com)
	This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 3, as published by the Free Software Foundation.
	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301, USA.
*/
	
// Nope (if called directly)
defined( 'ABSPATH' ) || exit;

// Establish variables
if( !defined( 'DSWCPM_DIR' ) ) {
  define( 'DSWCPM_DIR', dirname( __FILE__ ) );		  	// Plugin Directory
}
if( !defined( 'DSWCPM_VERSION' ) ) {
  define( 'DSWCPM_VERSION', '0.1.0' );				  	// Plugin Version
}
if( !defined( 'DSWCPM_INC_DIR' ) ) {
  define( 'DSWCPM_INC_DIR', DSWCPM_DIR .'/inc/' );	  	// Plugin 'inc' directory
}
if(!defined('DSWCPM_PREFIX')) {
  define('DSWCPM_PREFIX', 'DSWCPM');					// Plugin Prefix
}
if(!defined('DSWCPM_VAR_PREFIX')) {
  define('DSWCPM_VAR_PREFIX', '_DSWCPM_');			  	// Variable Prefix
}

include_once( DSWCPM_INC_DIR . 'createmetadata.php');	// Creates the Meta fields and saves to the database
include_once( DSWCPM_INC_DIR . 'display-productattributesbox.php');	// Displays the input metadata on the Product Attributes tab
