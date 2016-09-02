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
   * TrialAsyncErrorService
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
class TrialAsyncErrorService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'TrialAsyncErrorService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201607';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201607/TrialAsyncErrorService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201607/TrialAsyncErrorService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array('AdError' => 'AdError', 'AdGroupAdError' => 'AdGroupAdError', 'AdGroupCriterionError' => 'AdGroupCriterionError', 'AdGroupFeedError' => 'AdGroupFeedError', 'AdGroupServiceError' => 'AdGroupServiceError', 'AuthenticationError' => 'AuthenticationError', 'AuthorizationError' => 'AuthorizationError', 'BiddingErrors' => 'BiddingErrors', 'CampaignCriterionError' => 'CampaignCriterionError', 'CampaignError' => 'CampaignError', 'CampaignFeedError' => 'CampaignFeedError', 'CampaignPreferenceError' => 'CampaignPreferenceError', 'CampaignSharedSetError' => 'CampaignSharedSetError', 'ClientTermsError' => 'ClientTermsError', 'CriterionError' => 'CriterionError', 'DateError' => 'DateError', 'DateRange' => 'DateRange', 'DateRangeError' => 'DateRangeError', 'DistinctError' => 'DistinctError', 'EntityAccessDenied' => 'EntityAccessDenied', 'EntityCountLimitExceeded' => 'EntityCountLimitExceeded', 'EntityNotFound' => 'EntityNotFound', 'FeedError' => 'FeedError', 'FunctionError' => 'FunctionError', 'IdError' => 'IdError', 'ImageError' => 'ImageError', 'InternalApiError' => 'InternalApiError', 'MediaError' => 'MediaError', 'MultiplierError' => 'MultiplierError', 'NewEntityCreationError' => 'NewEntityCreationError', 'NotEmptyError' => 'NotEmptyError', 'NullError' => 'NullError', 'OperationAccessDenied' => 'OperationAccessDenied', 'OperatorError' => 'OperatorError', 'OrderBy' => 'OrderBy', 'Paging' => 'Paging', 'PagingError' => 'PagingError', 'PolicyViolationError.Part' => 'PolicyViolationErrorPart', 'PolicyViolationKey' => 'PolicyViolationKey', 'Predicate' => 'Predicate', 'QueryError' => 'QueryError', 'QuotaCheckError' => 'QuotaCheckError', 'RangeError' => 'RangeError', 'RateExceededError' => 'RateExceededError', 'ReadOnlyError' => 'ReadOnlyError', 'RejectedError' => 'RejectedError', 'RequestError' => 'RequestError', 'RequiredError' => 'RequiredError', 'SelectorError' => 'SelectorError', 'SettingError' => 'SettingError', 'SizeLimitError' => 'SizeLimitError', 'SoapHeader' => 'SoapRequestHeader', 'SoapResponseHeader' => 'SoapResponseHeader', 'StringFormatError' => 'StringFormatError', 'StringLengthError' => 'StringLengthError', 'UrlError' => 'UrlError', 'VideoError' => 'VideoError', 'DatabaseError' => 'DatabaseError', 'PolicyViolationError' => 'PolicyViolationError', 'ApiError' => 'ApiError', 'ApiException' => 'ApiException', 'ApplicationException' => 'ApplicationException', 'Selector' => 'Selector', 'TrialAsyncError' => 'TrialAsyncError', 'TrialAsyncErrorPage' => 'TrialAsyncErrorPage', 'Page' => 'Page', 'AdError.Reason' => 'AdErrorReason', 'AdGroupAdError.Reason' => 'AdGroupAdErrorReason', 'AdGroupCriterionError.Reason' => 'AdGroupCriterionErrorReason', 'AdGroupFeedError.Reason' => 'AdGroupFeedErrorReason', 'AdGroupServiceError.Reason' => 'AdGroupServiceErrorReason', 'AuthenticationError.Reason' => 'AuthenticationErrorReason', 'AuthorizationError.Reason' => 'AuthorizationErrorReason', 'BiddingErrors.Reason' => 'BiddingErrorsReason', 'CampaignCriterionError.Reason' => 'CampaignCriterionErrorReason', 'CampaignError.Reason' => 'CampaignErrorReason', 'CampaignFeedError.Reason' => 'CampaignFeedErrorReason', 'CampaignPreferenceError.Reason' => 'CampaignPreferenceErrorReason', 'CampaignSharedSetError.Reason' => 'CampaignSharedSetErrorReason', 'ClientTermsError.Reason' => 'ClientTermsErrorReason', 'CriterionError.Reason' => 'CriterionErrorReason', 'DatabaseError.Reason' => 'DatabaseErrorReason', 'DateError.Reason' => 'DateErrorReason', 'DateRangeError.Reason' => 'DateRangeErrorReason', 'DistinctError.Reason' => 'DistinctErrorReason', 'EntityAccessDenied.Reason' => 'EntityAccessDeniedReason', 'EntityCountLimitExceeded.Reason' => 'EntityCountLimitExceededReason', 'EntityNotFound.Reason' => 'EntityNotFoundReason', 'FeedError.Reason' => 'FeedErrorReason', 'FunctionError.Reason' => 'FunctionErrorReason', 'IdError.Reason' => 'IdErrorReason', 'ImageError.Reason' => 'ImageErrorReason', 'InternalApiError.Reason' => 'InternalApiErrorReason', 'MediaError.Reason' => 'MediaErrorReason', 'MultiplierError.Reason' => 'MultiplierErrorReason', 'NewEntityCreationError.Reason' => 'NewEntityCreationErrorReason', 'NotEmptyError.Reason' => 'NotEmptyErrorReason', 'NullError.Reason' => 'NullErrorReason', 'OperationAccessDenied.Reason' => 'OperationAccessDeniedReason', 'OperatorError.Reason' => 'OperatorErrorReason', 'PagingError.Reason' => 'PagingErrorReason', 'Predicate.Operator' => 'PredicateOperator', 'QueryError.Reason' => 'QueryErrorReason', 'QuotaCheckError.Reason' => 'QuotaCheckErrorReason', 'RangeError.Reason' => 'RangeErrorReason', 'RateExceededError.Reason' => 'RateExceededErrorReason', 'ReadOnlyError.Reason' => 'ReadOnlyErrorReason', 'RejectedError.Reason' => 'RejectedErrorReason', 'RequestError.Reason' => 'RequestErrorReason', 'RequiredError.Reason' => 'RequiredErrorReason', 'SelectorError.Reason' => 'SelectorErrorReason', 'SettingError.Reason' => 'SettingErrorReason', 'SizeLimitError.Reason' => 'SizeLimitErrorReason', 'SortOrder' => 'SortOrder', 'StringFormatError.Reason' => 'StringFormatErrorReason', 'StringLengthError.Reason' => 'StringLengthErrorReason', 'UrlError.Reason' => 'UrlErrorReason', 'VideoError.Reason' => 'VideoErrorReason', 'get' => 'TrialAsyncErrorServiceGet', 'getResponse' => 'TrialAsyncErrorServiceGetResponse', 'query' => 'Query', 'queryResponse' => 'QueryResponse');
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
     * Returns a TrialAsyncErrorPage that contains a list of TrialAsyncErrors matching the selector.
     * 
     * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
     * while retrieving the results.
     */
    public function get($selector)
    {
        $args = new TrialAsyncErrorServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a TrialAsyncErrorPage that contains a list of TrialAsyncError matching the query.
     * 
     * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
     * while retrieving the results.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
