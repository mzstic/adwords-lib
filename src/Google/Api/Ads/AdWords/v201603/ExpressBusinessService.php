<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201603;
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
   * ExpressBusinessService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class ExpressBusinessService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'ExpressBusinessService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/express/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/express/v201603/ExpressBusinessService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/express/v201603/ExpressBusinessService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'ClientTermsError' => ClientTermsError::class,
        'DateError' => DateError::class,
        'DateRange' => DateRange::class,
        'DistinctError' => DistinctError::class,
        'IdError' => IdError::class,
        'InternalApiError' => InternalApiError::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullError' => NullError::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
        'Paging' => Paging::class,
        'Predicate' => Predicate::class,
        'QuotaCheckError' => QuotaCheckError::class,
        'RangeError' => RangeError::class,
        'RateExceededError' => RateExceededError::class,
        'ReadOnlyError' => ReadOnlyError::class,
        'RejectedError' => RejectedError::class,
        'RequestError' => RequestError::class,
        'RequiredError' => RequiredError::class,
        'SelectorError' => SelectorError::class,
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StringLengthError' => StringLengthError::class,
        'DatabaseError' => DatabaseError::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'Selector' => Selector::class,
        'Operation' => Operation::class,
        'Page' => Page::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DateError.Reason' => DateErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
        'IdError.Reason' => IdErrorReason::class,
        'InternalApiError.Reason' => InternalApiErrorReason::class,
        'NotEmptyError.Reason' => NotEmptyErrorReason::class,
        'NullError.Reason' => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'Operator' => Operator::class,
        'OperatorError.Reason' => OperatorErrorReason::class,
        'Predicate.Operator' => PredicateOperator::class,
        'QuotaCheckError.Reason' => QuotaCheckErrorReason::class,
        'RangeError.Reason' => RangeErrorReason::class,
        'RateExceededError.Reason' => RateExceededErrorReason::class,
        'ReadOnlyError.Reason' => ReadOnlyErrorReason::class,
        'RejectedError.Reason' => RejectedErrorReason::class,
        'RequestError.Reason' => RequestErrorReason::class,
        'RequiredError.Reason' => RequiredErrorReason::class,
        'SelectorError.Reason' => SelectorErrorReason::class,
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'ExpressBusinessError' => ExpressBusinessError::class,
        'ExpressBusiness' => ExpressBusiness::class,
        'ExpressBusinessOperation' => ExpressBusinessOperation::class,
        'ExpressBusinessPage' => ExpressBusinessPage::class,
        'NoStatsPage' => NoStatsPage::class,
        'ExpressBusiness.Status' => ExpressBusinessStatus::class,
        'ExpressBusinessError.Reason' => ExpressBusinessErrorReason::class,
        'get' => ExpressBusinessServiceGet::class,
        'getResponse' => ExpressBusinessServiceGetResponse::class,
        'mutate' => ExpressBusinessServiceMutate::class,
        'mutateResponse' => ExpressBusinessServiceMutateResponse::class,
    ];

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
     * Retrieves the Express businesses that meet the criteria set in the given selector.
     * 
     * @param selector the selector specifying the AdWords Express businesses to return
     * @return list of AdWords Express businesses identified by the selector
     */
    public function get($selector)
    {
        $args = new ExpressBusinessServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     * 
     * 
     * 
     * Performs the given {@link ExpressBusinessOperation}.
     * 
     * @param operations list of unique operations; the same AdWords Express business cannot be
     * specified in more than one operation
     * @return the updated AdWords Express businesses
     */
    public function mutate($operations)
    {
        $args = new ExpressBusinessServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
}