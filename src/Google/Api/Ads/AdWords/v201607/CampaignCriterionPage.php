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
   * Contains a subset of campaign criteria resulting from a call to
   * {@link CampaignCriterionService#get}.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class CampaignCriterionPage extends Page
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201607';
    const XSI_TYPE = 'CampaignCriterionPage';
    /**
     * @access public
     * @var CampaignCriterion[]
     */
    public $entries;
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
    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}