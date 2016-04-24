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
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
class Predicate
{
    /**
     * @var string
     */
    public $field;
    /**
     * @var PredicateOperator
     */
    public $operator;
    /**
     * @var string[]
     */
    public $values;
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
        return 'Predicate';
    }
    public function __construct($field = null, $operator = null, $values = null)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }
}
