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
   * {@link Attribute}s encompass the core information about a particular
   * {@link com.google.ads.api.services.targetingideas.TargetingIdea}. Some
   * attributes are for {@code KEYWORD} {@link IdeaType}s, some are for
   * {@code PLACEMENT} {@link IdeaType}s, and some are for both. Ultimately, an
   * {@link Attribute} instance simply wraps an actual value of interest. For
   * example, {@link KeywordAttribute} wraps the keyword itself, while a
   * {@link BooleanAttribute} simply wraps a boolean describing some information
   * about the keyword idea.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class Attribute
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/o/v201506';
    const XSI_TYPE = 'Attribute';
    /**
     * @access public
     * @var string
     */
    public $AttributeType;
    private $_parameterMap = array('Attribute.Type' => 'AttributeType');
    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }
    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return null;
        }
        return $this->{$this->_parameterMap[$var]};
    }
    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }
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
    public function __construct($AttributeType = null)
    {
        $this->AttributeType = $AttributeType;
    }
}
