<?php
/**
 * This file is part of the "WCM Filterama" package.
 *
 * © 2016 Franz Josef Kaiser
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WCM\Filterama\Model;

/**
 * Interface PropertyResolverInterface
 * @package WCM\Filterama
 */
interface ResolverInterface
{
	public function resolve( $property );
}