<?php
/**
 *  This file is part of wp-Typography.
 *
 *  Copyright 2017 Peter Putzer.
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
 *  @package wpTypography/PHPTypography
 *  @license http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace PHP_Typography\Fixes\Token_Fixes;

use \PHP_Typography\Fixes\Token_Fix;
use \PHP_Typography\Settings;
use \PHP_Typography\U;

/**
 * Wraps hard hypens with zero-width spaces (if enabled).
 *
 * @author Peter Putzer <github@mundschenk.at>
 *
 * @since 5.0.0
 */
class Wrap_Hard_Hyphens_Fix extends Abstract_Token_Fix {
	/**
	 * Creates a new fix instance.
	 *
	 * @param bool $feed_compatible Optional. Default false.
	 */
	public function __construct( $feed_compatible = false ) {
		parent::__construct( Token_Fix::MIXED_WORDS, $feed_compatible );
	}

	/**
	 * Apply the tweak to a given textnode.
	 *
	 * @param array         $tokens   Required.
	 * @param Settings      $settings Required.
	 * @param bool          $is_title Optional. Default false.
	 * @param \DOMText|null $textnode Optional. Default null.
	 *
	 * @return array An array of tokens.
	 */
	public function apply( array $tokens, Settings $settings, $is_title = false, \DOMText $textnode = null ) {
		if ( ! empty( $settings['hyphenHardWrap'] ) || ! empty( $settings['smartDashes'] ) ) {

			// Various special characters and regular expressions.
			$regex      = $settings->get_regular_expressions();
			$components = $settings->get_components();

			foreach ( $tokens as $index => $text_token ) {
				$value = $text_token->value;

				if ( isset( $settings['hyphenHardWrap'] ) && $settings['hyphenHardWrap'] ) {
					$value = str_replace( $components['hyphensArray'], '-' . U::ZERO_WIDTH_SPACE, $value );
					$value = str_replace( '_', '_' . U::ZERO_WIDTH_SPACE, $value );
					$value = str_replace( '/', '/' . U::ZERO_WIDTH_SPACE, $value );

					$value = preg_replace( $regex['wrapHardHyphensRemoveEndingSpace'], '$1', $value );
				}

				if ( ! empty( $settings['smartDashes'] ) ) {
					// Handled here because we need to know we are inside a word and not a URL.
					$value = str_replace( '-', U::HYPHEN, $value );
				}

				$tokens[ $index ] = $text_token->with_value( $value );
			}
		}

		return $tokens;
	}
}
