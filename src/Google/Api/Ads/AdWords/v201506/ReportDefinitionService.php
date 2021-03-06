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
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
   * ReportDefinitionService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class ReportDefinitionService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'ReportDefinitionService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/ReportDefinitionService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/ReportDefinitionService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AuthenticationError'          => AuthenticationError::class,
        'AuthorizationError'           => AuthorizationError::class,
        'ClientTermsError'             => ClientTermsError::class,
        'CollectionSizeError'          => CollectionSizeError::class,
        'DateError'                    => DateError::class,
        'DistinctError'                => DistinctError::class,
        'EnumValuePair'                => EnumValuePair::class,
        'IdError'                      => IdError::class,
        'InternalApiError'             => InternalApiError::class,
        'NotEmptyError'                => NotEmptyError::class,
        'NotWhitelistedError'          => NotWhitelistedError::class,
        'NullError'                    => NullError::class,
        'OperationAccessDenied'        => OperationAccessDenied::class,
        'OperatorError'                => OperatorError::class,
        'QuotaCheckError'              => QuotaCheckError::class,
        'RangeError'                   => RangeError::class,
        'RateExceededError'            => RateExceededError::class,
        'ReadOnlyError'                => ReadOnlyError::class,
        'RejectedError'                => RejectedError::class,
        'ReportDefinitionError'        => ReportDefinitionError::class,
        'ReportDefinitionField'        => ReportDefinitionField::class,
        'RequestError'                 => RequestError::class,
        'RequiredError'                => RequiredError::class,
        'SizeLimitError'               => SizeLimitError::class,
        'SoapHeader'                   => SoapRequestHeader::class,
        'SoapResponseHeader'           => SoapResponseHeader::class,
        'StringLengthError'            => StringLengthError::class,
        'DatabaseError'                => DatabaseError::class,
        'ApiError'                     => ApiError::class,
        'ApiException'                 => ApiException::class,
        'ApplicationException'         => ApplicationException::class,
        'AuthenticationError.Reason'   => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'    => AuthorizationErrorReason::class,
        'ClientTermsError.Reason'      => ClientTermsErrorReason::class,
        'CollectionSizeError.Reason'   => CollectionSizeErrorReason::class,
        'DatabaseError.Reason'         => DatabaseErrorReason::class,
        'DateError.Reason'             => DateErrorReason::class,
        'DistinctError.Reason'         => DistinctErrorReason::class,
        'IdError.Reason'               => IdErrorReason::class,
        'InternalApiError.Reason'      => InternalApiErrorReason::class,
        'NotEmptyError.Reason'         => NotEmptyErrorReason::class,
        'NotWhitelistedError.Reason'   => NotWhitelistedErrorReason::class,
        'NullError.Reason'             => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'OperatorError.Reason'         => OperatorErrorReason::class,
        'QuotaCheckError.Reason'       => QuotaCheckErrorReason::class,
        'RangeError.Reason'            => RangeErrorReason::class,
        'RateExceededError.Reason'     => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'         => ReadOnlyErrorReason::class,
        'RejectedError.Reason'         => RejectedErrorReason::class,
        'ReportDefinition.ReportType'  => ReportDefinitionReportType::class,
        'ReportDefinitionError.Reason' => ReportDefinitionErrorReason::class,
        'RequestError.Reason'          => RequestErrorReason::class,
        'RequiredError.Reason'         => RequiredErrorReason::class,
        'SizeLimitError.Reason'        => SizeLimitErrorReason::class,
        'StringLengthError.Reason'     => StringLengthErrorReason::class,
        'getReportFields'              => GetReportFields::class,
        'getReportFieldsResponse'      => GetReportFieldsResponse::class,
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options['classmap'] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME, self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the available report fields for a given report type.
     * 
     * @param reportType The type of report.
     * @return The list of available report fields. Each
     * {@link ReportDefinitionField} encapsulates the field name, the
     * field data type, and the enum values (if the field's type is
     * {@code enum}).
     * @throws ApiException if a problem occurred while fetching the
     * ReportDefinitionField information.
     */
    public function getReportFields($reportType)
    {
        $args = new GetReportFields($reportType);
        $result = $this->__soapCall('getReportFields', array($args));
        return $result->rval;
    }
}
