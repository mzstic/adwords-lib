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
   * SharedSetService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class SharedSetService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'SharedSetService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201603/SharedSetService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201603/SharedSetService';
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
        'EntityCountLimitExceeded' => EntityCountLimitExceeded::class,
        'EntityNotFound' => EntityNotFound::class,
        'IdError' => IdError::class,
        'InternalApiError' => InternalApiError::class,
        'NewEntityCreationError' => NewEntityCreationError::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullError' => NullError::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
        'Paging' => Paging::class,
        'PagingError' => PagingError::class,
        'Predicate' => Predicate::class,
        'QueryError' => QueryError::class,
        'QuotaCheckError' => QuotaCheckError::class,
        'RangeError' => RangeError::class,
        'RateExceededError' => RateExceededError::class,
        'ReadOnlyError' => ReadOnlyError::class,
        'RejectedError' => RejectedError::class,
        'RequestError' => RequestError::class,
        'RequiredError' => RequiredError::class,
        'SelectorError' => SelectorError::class,
        'SharedSet' => SharedSet::class,
        'SharedSetError' => SharedSetError::class,
        'SharedSetOperation' => SharedSetOperation::class,
        'SharedSetPage' => SharedSetPage::class,
        'SharedSetReturnValue' => SharedSetReturnValue::class,
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StringLengthError' => StringLengthError::class,
        'DatabaseError' => DatabaseError::class,
        'ListReturnValue' => ListReturnValue::class,
        'NullStatsPage' => NullStatsPage::class,
        'Operation' => Operation::class,
        'Page' => Page::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'Selector' => Selector::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DateError.Reason' => DateErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
        'EntityCountLimitExceeded.Reason' => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason' => EntityNotFoundReason::class,
        'IdError.Reason' => IdErrorReason::class,
        'InternalApiError.Reason' => InternalApiErrorReason::class,
        'NewEntityCreationError.Reason' => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason' => NotEmptyErrorReason::class,
        'NullError.Reason' => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'Operator' => Operator::class,
        'OperatorError.Reason' => OperatorErrorReason::class,
        'PagingError.Reason' => PagingErrorReason::class,
        'Predicate.Operator' => PredicateOperator::class,
        'QueryError.Reason' => QueryErrorReason::class,
        'QuotaCheckError.Reason' => QuotaCheckErrorReason::class,
        'RangeError.Reason' => RangeErrorReason::class,
        'RateExceededError.Reason' => RateExceededErrorReason::class,
        'ReadOnlyError.Reason' => ReadOnlyErrorReason::class,
        'RejectedError.Reason' => RejectedErrorReason::class,
        'RequestError.Reason' => RequestErrorReason::class,
        'RequiredError.Reason' => RequiredErrorReason::class,
        'SelectorError.Reason' => SelectorErrorReason::class,
        'SharedSet.Status' => SharedSetStatus::class,
        'SharedSetError.Reason' => SharedSetErrorReason::class,
        'SharedSetType' => SharedSetType::class,
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'get' => SharedSetServiceGet::class,
        'getResponse' => SharedSetServiceGetResponse::class,
        'mutate' => SharedSetServiceMutate::class,
        'mutateResponse' => SharedSetServiceMutateResponse::class,
        'query' => Query::class,
        'queryResponse' => QueryResponse::class,
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
     * Returns a list of SharedSets based on the given selector.
     * @param selector the selector specifying the query
     * @return a list of SharedSet entities that meet the criterion specified
     * by the selector
     * @throws ApiException
     */
    public function get($selector)
    {
        $args = new SharedSetServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Applies the list of mutate operations.
     * @param operations the operations to apply
     * @return the modified CriterionList entities
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $args = new SharedSetServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of SharedSet entities that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @returns A list of SharedSet entities
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
