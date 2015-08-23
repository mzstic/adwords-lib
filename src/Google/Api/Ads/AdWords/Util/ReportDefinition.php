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
   * Represents a report definition.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
class ReportDefinition
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var Selector
     */
    public $selector;
    /**
     * @var string
     */
    public $reportName;
    /**
     * @var tnsReportDefinitionReportType
     */
    public $reportType;
    /**
     * @var boolean
     */
    public $hasAttachment;
    /**
     * @var tnsReportDefinitionDateRangeType
     */
    public $dateRangeType;
    /**
     * @var tnsDownloadFormat
     */
    public $downloadFormat;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var boolean
     */
    public $includeZeroImpressions;
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
        return 'ReportDefinition';
    }
    public function __construct($id = null, $selector = null, $reportName = null, $reportType = null, $hasAttachment = null, $dateRangeType = null, $downloadFormat = null, $creationTime = null, $includeZeroImpressions = null)
    {
        $this->id = $id;
        $this->selector = $selector;
        $this->reportName = $reportName;
        $this->reportType = $reportType;
        $this->hasAttachment = $hasAttachment;
        $this->dateRangeType = $dateRangeType;
        $this->downloadFormat = $downloadFormat;
        $this->creationTime = $creationTime;
        $this->includeZeroImpressions = $includeZeroImpressions;
    }
}