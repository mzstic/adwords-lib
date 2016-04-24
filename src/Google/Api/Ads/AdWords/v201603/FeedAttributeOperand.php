<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201603;



/**
   * Represents a feed attribute reference to use in a function.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class FeedAttributeOperand extends FunctionArgumentOperand
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const XSI_TYPE = 'FeedAttributeOperand';
    /**
     * @access public
     * @var integer
     */
    public $feedId;
    /**
     * @access public
     * @var integer
     */
    public $feedAttributeId;
    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }
    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }
    public function __construct($feedId = null, $feedAttributeId = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->feedId = $feedId;
        $this->feedAttributeId = $feedAttributeId;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }
}