<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201506;

/**
   * A {@link SearchParameter} that specifies a set of URLs that results should
   * in some way be related too. For example, keyword results would be
   * similar to content keywords found on the related URLs.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class RelatedToUrlSearchParameter extends SearchParameter
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/o/v201506';
    const XSI_TYPE = 'RelatedToUrlSearchParameter';
    /**
     * @access public
     * @var string[]
     */
    public $urls;
    /**
     * @access public
     * @var boolean
     */
    public $includeSubUrls;
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }
    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }
    public function __construct($urls = null, $includeSubUrls = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->urls = $urls;
        $this->includeSubUrls = $includeSubUrls;
        $this->SearchParameterType = $SearchParameterType;
    }
}
