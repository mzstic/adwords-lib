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
   * AdGroupBidModifierService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class AdGroupBidModifierService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'AdGroupBidModifierService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/AdGroupBidModifierService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/AdGroupBidModifierService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AuthenticationError'           => AuthenticationError::class,
        'AuthorizationError'            => AuthorizationError::class,
        'ClientTermsError'              => ClientTermsError::class,
        'CriterionError'                => CriterionError::class,
        'DateRange'                     => DateRange::class,
        'DistinctError'                 => DistinctError::class,
        'EntityNotFound'                => EntityNotFound::class,
        'IdError'                       => IdError::class,
        'InternalApiError'              => InternalApiError::class,
        'NewEntityCreationError'        => NewEntityCreationError::class,
        'NotEmptyError'                 => NotEmptyError::class,
        'OperationAccessDenied'         => OperationAccessDenied::class,
        'OperatorError'                 => OperatorError::class,
        'OrderBy'                       => OrderBy::class,
        'Paging'                        => Paging::class,
        'Platform'                      => Platform::class,
        'Predicate'                     => Predicate::class,
        'QueryError'                    => QueryError::class,
        'QuotaCheckError'               => QuotaCheckError::class,
        'RangeError'                    => RangeError::class,
        'RateExceededError'             => RateExceededError::class,
        'ReadOnlyError'                 => ReadOnlyError::class,
        'RejectedError'                 => RejectedError::class,
        'RequestError'                  => RequestError::class,
        'RequiredError'                 => RequiredError::class,
        'SelectorError'                 => SelectorError::class,
        'SizeLimitError'                => SizeLimitError::class,
        'SoapHeader'                    => SoapRequestHeader::class,
        'SoapResponseHeader'            => SoapResponseHeader::class,
        'StringLengthError'             => StringLengthError::class,
        'DatabaseError'                 => DatabaseError::class,
        'ApiError'                      => ApiError::class,
        'ApiException'                  => ApiException::class,
        'ApplicationException'          => ApplicationException::class,
        'Selector'                      => Selector::class,
        'Criterion'                     => Criterion::class,
        'AdGroupBidModifier'            => AdGroupBidModifier::class,
        'AdGroupBidModifierOperation'   => AdGroupBidModifierOperation::class,
        'AdGroupBidModifierPage'        => AdGroupBidModifierPage::class,
        'AdGroupBidModifierReturnValue' => AdGroupBidModifierReturnValue::class,
        'ListReturnValue'               => ListReturnValue::class,
        'Operation'                     => Operation::class,
        'Page'                          => Page::class,
        'AuthenticationError.Reason'    => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'     => AuthorizationErrorReason::class,
        'BidModifierSource'             => BidModifierSource::class,
        'ClientTermsError.Reason'       => ClientTermsErrorReason::class,
        'Criterion.Type'                => CriterionType::class,
        'CriterionError.Reason'         => CriterionErrorReason::class,
        'DatabaseError.Reason'          => DatabaseErrorReason::class,
        'DistinctError.Reason'          => DistinctErrorReason::class,
        'EntityNotFound.Reason'         => EntityNotFoundReason::class,
        'IdError.Reason'                => IdErrorReason::class,
        'InternalApiError.Reason'       => InternalApiErrorReason::class,
        'NewEntityCreationError.Reason' => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason'          => NotEmptyErrorReason::class,
        'OperationAccessDenied.Reason'  => OperationAccessDeniedReason::class,
        'Operator'                      => Operator::class,
        'OperatorError.Reason'          => OperatorErrorReason::class,
        'Predicate.Operator'            => PredicateOperator::class,
        'QueryError.Reason'             => QueryErrorReason::class,
        'QuotaCheckError.Reason'        => QuotaCheckErrorReason::class,
        'RangeError.Reason'             => RangeErrorReason::class,
        'RateExceededError.Reason'      => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'          => ReadOnlyErrorReason::class,
        'RejectedError.Reason'          => RejectedErrorReason::class,
        'RequestError.Reason'           => RequestErrorReason::class,
        'RequiredError.Reason'          => RequiredErrorReason::class,
        'SelectorError.Reason'          => SelectorErrorReason::class,
        'SizeLimitError.Reason'         => SizeLimitErrorReason::class,
        'SortOrder'                     => SortOrder::class,
        'StringLengthError.Reason'      => StringLengthErrorReason::class,
        'get'                           => AdGroupBidModifierServiceGet::class,
        'getResponse'                   => AdGroupBidModifierServiceGetResponse::class,
        'mutate'                        => AdGroupBidModifierServiceMutate::class,
        'mutateResponse'                => AdGroupBidModifierServiceMutateResponse::class,
        'query'                         => Query::class,
        'queryResponse'                 => QueryResponse::class,
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
     * Gets ad group level criterion bid modifiers.
     * 
     * @param selector The selector specifying the {@link AdGroupBidModifier}s to return.
     * @return A list of ad group bid modifiers.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($selector)
    {
        $args = new AdGroupBidModifierServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
     * 
     * 
     * 
     * Adds, removes or updates ad group bid modifier overrides.
     * 
     * @param operations The operations to apply.
     * @return The added ad group bid modifier overrides.
     * @throws ApiException when there is at least one error with the request.
     */
    public function mutate($operations)
    {
        $args = new AdGroupBidModifierServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a list of {@link AdGroupBidModifier}s that match the query.
     * 
     * @param query The SQL-like AWQL query string.
     * @throws ApiException when there are one or more errors with the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
