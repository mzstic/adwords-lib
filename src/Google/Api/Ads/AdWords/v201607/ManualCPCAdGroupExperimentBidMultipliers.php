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
   * Adgroup level bid multipliers used in manual CPC bidding strategies.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class ManualCPCAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201607';
    const XSI_TYPE = 'ManualCPCAdGroupExperimentBidMultipliers';
    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpcMultiplier;
    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxContentCpcMultiplier;
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
    public function __construct($maxCpcMultiplier = null, $maxContentCpcMultiplier = null, $AdGroupExperimentBidMultipliersType = null)
    {
        parent::__construct();
        $this->maxCpcMultiplier = $maxCpcMultiplier;
        $this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
        $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
    }
}