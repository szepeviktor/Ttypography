<?php
/**
 *  This file is part of wp-Typography.
 *
 *  Copyright 2015-2017 Peter Putzer.
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 *  ***
 *
 *  @package wpTypography
 *  @author Peter Putzer <github@mundschenk.at>
 *  @license http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * An autoloader implementation for the WP_Typography classes.
 *
 * @param string $class_name Required.
 */
function wp_typography_autoloader( $class_name ) {
	static $prefix;
	static $base_namespace;
	if ( empty( $prefix ) || empty( $base_namespace ) ) {
		$prefix = 'WP_Typography';
		$base_namespace = $prefix . '\\';
	}

	if ( false === strpos( $class_name, $prefix ) ) {
		return; // abort early.
	} elseif ( false !== strpos( $class_name, $base_namespace ) ) {
		$class_name = substr( $class_name, strlen( $base_namespace ) );
	}

	$classes_dir      = realpath( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR;
	$class_name_parts = str_replace( '_', '-', explode( '\\', $class_name ) );
	$class_file       = 'class-' . strtolower( array_pop( $class_name_parts ) ) . '.php';

	if ( count( $class_name_parts ) > 0 ) {
		$classes_dir .= implode( DIRECTORY_SEPARATOR, array_map( 'strtolower', $class_name_parts ) ) . DIRECTORY_SEPARATOR;
	}

	$class_file_path = $classes_dir . $class_file;
	if ( is_file( $class_file_path ) ) {
		require_once( $class_file_path );
	}
}
spl_autoload_register( 'wp_typography_autoloader' );
