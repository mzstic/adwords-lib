<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201607;


/**
   * This operand specifies information required for location extension targeting.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class LocationExtensionOperand extends FunctionArgumentOperand
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201607';
    const XSI_TYPE = 'LocationExtensionOperand';
    /**
     * @access public
     * @var ConstantOperand
     */
    public $radius;
    /**
     * @access public
     * @var integer
     */
    public $locationId;
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
    public function __construct($radius = null, $locationId = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->radius = $radius;
        $this->locationId = $locationId;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }
}