<?php
/**
 *  This file is part of wp-Typography.
 *
 *  Copyright 2015-2017 Peter Putzer.
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or ( at your option ) any later version.
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
 *  @package wpTypography/Tests
 *  @license http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace PHP_Typography\Tests\Fixes\Node_Fixes;

use \PHP_Typography\Fixes\Node_Fixes;
use \PHP_Typography\Settings;

/**
 * Smart_Ordinal_Suffix_Fix unit test.
 *
 * @coversDefaultClass \PHP_Typography\Fixes\Node_Fixes\Smart_Ordinal_Suffix_Fix
 * @usesDefaultClass \PHP_Typography\Fixes\Node_Fixes\Smart_Ordinal_Suffix_Fix
 *
 * @uses ::__construct
 * @uses PHP_Typography\Fixes\Node_Fixes\Abstract_Node_Fix::__construct
 * @uses PHP_Typography\Arrays
 * @uses PHP_Typography\DOM
 * @uses PHP_Typography\Settings
 * @uses PHP_Typography\Settings\Dash_Style
 * @uses PHP_Typography\Settings\Quote_Style
 * @uses PHP_Typography\Settings\Simple_Dashes
 * @uses PHP_Typography\Settings\Simple_Quotes
 * @uses PHP_Typography\Strings
 */
class Smart_Ordinal_Suffix_Fix_Test extends Node_Fix_Testcase {

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() { // @codingStandardsIgnoreLine
		parent::setUp();

		$this->fix = new Node_Fixes\Smart_Ordinal_Suffix_Fix();
	}

	/**
	 * Tests the constructor.
	 *
	 * @covers ::__construct
	 *
	 * @uses PHP_Typography\Fixes\Node_Fixes\Abstract_Node_Fix::__construct
	 */
	public function test_array_constructor() {
		$this->fix = new Node_Fixes\Smart_Ordinal_Suffix_Fix( 'foo' );

		$this->assertAttributeEquals( 'foo', 'css_class',   $this->fix, 'The CSS class should be "foo".' );
	}

	/**
	 * Provide data for testing ordinal suffixes.
	 *
	 * @return array
	 */
	public function provide_smart_ordinal_suffix() {
		return [
			[ 'in the 1st instance',      'in the 1<sup>st</sup> instance', '' ],
			[ 'in the 2nd degree',        'in the 2<sup>nd</sup> degree',   '' ],
			[ 'a 3rd party',              'a 3<sup>rd</sup> party',         '' ],
			[ '12th Night',               '12<sup>th</sup> Night',          '' ],
			[ 'in the 1st instance, we',  'in the 1<sup class="ordinal">st</sup> instance, we',  'ordinal' ],
			[ 'murder in the 2nd degree', 'murder in the 2<sup class="ordinal">nd</sup> degree', 'ordinal' ],
			[ 'a 3rd party',              'a 3<sup class="ordinal">rd</sup> party',              'ordinal' ],
			[ 'the 12th Night',           'the 12<sup class="ordinal">th</sup> Night',           'ordinal' ],
		];
	}

	/**
	 * Test apply.
	 *
	 * @covers ::apply
	 *
	 * @dataProvider provide_smart_ordinal_suffix
	 *
	 * @param string $input     HTML input.
	 * @param string $result    Expected result.
	 * @param string $css_class Optional.
	 */
	public function test_apply( $input, $result, $css_class ) {
		$this->s->set_smart_ordinal_suffix( true );

		if ( ! empty( $css_class ) ) {
			$this->fix = new Node_Fixes\Smart_Ordinal_Suffix_Fix( $css_class );
		}

		$this->assertFixResultSame( $input, $result );
	}

	/**
	 * Test apply.
	 *
	 * @covers ::apply
	 *
	 * @dataProvider provide_smart_ordinal_suffix
	 *
	 * @param string $input  HTML input.
	 * @param string $result Expected result.
	 * @param string $css_class Optional.
	 */
	public function test_apply_off( $input, $result, $css_class ) {
		$this->s->set_smart_ordinal_suffix( false );

		if ( ! empty( $css_class ) ) {
			$this->fix = new Node_Fixes\Smart_Ordinal_Suffix_Fix( $css_class );
		}

		$this->assertFixResultSame( $input, $input );
	}
}
