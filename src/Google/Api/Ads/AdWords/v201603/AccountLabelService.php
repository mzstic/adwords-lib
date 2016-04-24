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
   * AccountLabelService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class AccountLabelService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'AccountLabelService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/mcm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/mcm/v201603/AccountLabelService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/mcm/v201603/AccountLabelService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'ClientTermsError' => ClientTermsError::class,
        'Date' => Date::class,
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
        'RegionCodeError' => RegionCodeError::class,
        'RejectedError' => RejectedError::class,
        'RequestError' => RequestError::class,
        'RequiredError' => RequiredError::class,
        'SelectorError' => SelectorError::class,
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StringFormatError' => StringFormatError::class,
        'StringLengthError' => StringLengthError::class,
        'DatabaseError' => DatabaseError::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'Selector' => Selector::class,
        'Operation' => Operation::class,
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
        'RegionCodeError.Reason' => RegionCodeErrorReason::class,
        'RejectedError.Reason' => RejectedErrorReason::class,
        'RequestError.Reason' => RequestErrorReason::class,
        'RequiredError.Reason' => RequiredErrorReason::class,
        'SelectorError.Reason' => SelectorErrorReason::class,
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StringFormatError.Reason' => StringFormatErrorReason::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'CollectionSizeError' => CollectionSizeError::class,
        'CurrencyCodeError' => CurrencyCodeError::class,
        'LabelServiceError' => LabelServiceError::class,
        'AccountLabel' => AccountLabel::class,
        'AccountLabelOperation' => AccountLabelOperation::class,
        'AccountLabelPage' => AccountLabelPage::class,
        'AccountLabelReturnValue' => AccountLabelReturnValue::class,
        'CollectionSizeError.Reason' => CollectionSizeErrorReason::class,
        'CurrencyCodeError.Reason' => CurrencyCodeErrorReason::class,
        'LabelServiceError.Reason' => LabelServiceErrorReason::class,
        'get' => AccountLabelServiceGet::class,
        'getResponse' => AccountLabelServiceGetResponse::class,
        'mutate' => AccountLabelServiceMutate::class,
        'mutateResponse' => AccountLabelServiceMutateResponse::class,
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
     * Returns a list of labels specified by the selector for the authenticated user.
     * 
     * @param selector filters the list of labels to return
     * @return response containing lists of labels that meet all the criteria of the selector
     * @throws ApiException if a problem occurs fetching the information requested
     */
    public function get($selector)
    {
        $args = new AccountLabelServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
     * 
     * 
     * 
     * Possible actions:
     * <ul>
     * <li> Create a new label - create a new {@link Label} and call mutate with ADD operator
     * <li> Edit the label name - set the appropriate fields in your {@linkplain Label} and call
     * mutate with the SET operator. Null fields will be interpreted to mean "no change"
     * <li> Delete the label - call mutate with REMOVE operator
     * </ul>
     * 
     * @param operations list of unique operations to be executed in a single transaction, in the
     * order specified.
     * @return the mutated labels, in the same order that they were in as the parameter
     * @throws ApiException if problems occurs while modifying label information
     */
    public function mutate($operations)
    {
        $args = new AccountLabelServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
}
