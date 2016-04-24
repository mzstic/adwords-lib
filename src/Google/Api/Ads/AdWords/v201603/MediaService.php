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
   * MediaService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class MediaService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'MediaService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201603/MediaService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201603/MediaService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        'Audio' => Audio::class,
        'AudioError' => AudioError::class,
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'ClientTermsError' => ClientTermsError::class,
        'DateRange' => DateRange::class,
        'Dimensions' => Dimensions::class,
        'DistinctError' => DistinctError::class,
        'EntityNotFound' => EntityNotFound::class,
        'IdError' => IdError::class,
        'Image' => Image::class,
        'ImageError' => ImageError::class,
        'InternalApiError' => InternalApiError::class,
        'MediaBundle' => MediaBundle::class,
        'MediaBundleError' => MediaBundleError::class,
        'MediaError' => MediaError::class,
        'Media_Size_DimensionsMapEntry' => Media_Size_DimensionsMapEntry::class,
        'Media_Size_StringMapEntry' => Media_Size_StringMapEntry::class,
        'NewEntityCreationError' => NewEntityCreationError::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullError' => NullError::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
        'Paging' => Paging::class,
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
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StringLengthError' => StringLengthError::class,
        'Video' => Video::class,
        'VideoError' => VideoError::class,
        'DatabaseError' => DatabaseError::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'Media' => Media::class,
        'MediaPage' => MediaPage::class,
        'Selector' => Selector::class,
        'AudioError.Reason' => AudioErrorReason::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
        'EntityNotFound.Reason' => EntityNotFoundReason::class,
        'IdError.Reason' => IdErrorReason::class,
        'ImageError.Reason' => ImageErrorReason::class,
        'InternalApiError.Reason' => InternalApiErrorReason::class,
        'Media.MediaType' => MediaMediaType::class,
        'Media.MimeType' => MediaMimeType::class,
        'Media.Size' => MediaSize::class,
        'MediaBundleError.Reason' => MediaBundleErrorReason::class,
        'MediaError.Reason' => MediaErrorReason::class,
        'NewEntityCreationError.Reason' => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason' => NotEmptyErrorReason::class,
        'NullError.Reason' => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'OperatorError.Reason' => OperatorErrorReason::class,
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
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'VideoError.Reason' => VideoErrorReason::class,
        'get' => MediaServiceGet::class,
        'getResponse' => MediaServiceGetResponse::class,
        'query' => Query::class,
        'queryResponse' => QueryResponse::class,
        'upload' => Upload::class,
        'uploadResponse' => UploadResponse::class,
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
     * Returns a list of media that meet the criteria specified by the selector.
     * <p class="note"><b>Note:</b> {@code MediaService} will not return any
     * {@link ImageAd} image files.</p>
     * 
     * @param serviceSelector Selects which media objects to return.
     * @return A list of {@code Media} objects.
     */
    public function get($serviceSelector)
    {
        $args = new MediaServiceGet($serviceSelector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of {@link Media} objects that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @returns A list of {@code Media} objects.
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
    /**
     * Uploads new media. Currently, you can upload {@link Image} files and {@link MediaBundle}s.
     * 
     * @param media A list of {@code Media} objects, each containing the data to
     * be uploaded.
     * @return A list of uploaded media in the same order as the argument list.
     */
    public function upload($media)
    {
        $args = new Upload($media);
        $result = $this->__soapCall('upload', array($args));
        return $result->rval;
    }
}