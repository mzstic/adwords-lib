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
   * Represents an item in a feed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class FeedItem
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201607';
    const XSI_TYPE = 'FeedItem';
    /**
     * @access public
     * @var integer
     */
    public $feedId;
    /**
     * @access public
     * @var integer
     */
    public $feedItemId;
    /**
     * @access public
     * @var tnsFeedItemStatus
     */
    public $status;
    /**
     * @access public
     * @var string
     */
    public $startTime;
    /**
     * @access public
     * @var string
     */
    public $endTime;
    /**
     * @access public
     * @var FeedItemAttributeValue[]
     */
    public $attributeValues;
    /**
     * @access public
     * @var FeedItemPolicyData[]
     */
    public $policyData;
    /**
     * @access public
     * @var FeedItemDevicePreference
     */
    public $devicePreference;
    /**
     * @access public
     * @var FeedItemScheduling
     */
    public $scheduling;
    /**
     * @access public
     * @var FeedItemCampaignTargeting
     */
    public $campaignTargeting;
    /**
     * @access public
     * @var FeedItemAdGroupTargeting
     */
    public $adGroupTargeting;
    /**
     * @access public
     * @var Keyword
     */
    public $keywordTargeting;
    /**
     * @access public
     * @var Location
     */
    public $geoTargeting;
    /**
     * @access public
     * @var FeedItemGeoRestriction
     */
    public $geoTargetingRestriction;
    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;
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
    public function __construct($feedId = null, $feedItemId = null, $status = null, $startTime = null, $endTime = null, $attributeValues = null, $policyData = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, $urlCustomParameters = null)
    {
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->attributeValues = $attributeValues;
        $this->policyData = $policyData;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->campaignTargeting = $campaignTargeting;
        $this->adGroupTargeting = $adGroupTargeting;
        $this->keywordTargeting = $keywordTargeting;
        $this->geoTargeting = $geoTargeting;
        $this->geoTargetingRestriction = $geoTargetingRestriction;
        $this->urlCustomParameters = $urlCustomParameters;
    }
}