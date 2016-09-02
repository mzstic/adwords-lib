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
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Retrieves the {@link ProductService}s that meet the criteria set in the given selector. Only a
   * limited number of {@link ProductService}s are returned.
   * 
   * @param selector the selector specifying the product services to return
   * @return list of product services identified by the selector
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class ProductServiceServiceGet
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/express/v201607';
    const XSI_TYPE = '';
    /**
     * @access public
     * @var Selector
     */
    public $selector;
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
    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}