<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\Util;

/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class DateRange
{
    /**
     * @var string
     */
    public $min;
    /**
     * @var string
     */
    public $max;
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return '';
    }
    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return 'DateRange';
    }
    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }
}