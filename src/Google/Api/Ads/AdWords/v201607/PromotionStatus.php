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
   * Statuses of a promotion.
   * 
   * <p>When a promotion status is set to UPGRADED_TO_ADWORDS, the corresponding campaigns will be
   * migrated to AdWords. Adwords Express will no longer manage the campaigns. Instead, advertisers
   * need to use the AdWords API and/or UI to manage the campaigns.
   * <p>Please note: it is one way migration from Adwords Express to AdWords. There is no way to
   * undo the migration currently.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class PromotionStatus
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/express/v201607';
    const XSI_TYPE = 'Promotion.Status';
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
    public function __construct()
    {
    }
}