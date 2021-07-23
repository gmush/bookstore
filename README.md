# bookstore
educational

# Swagger\Client\DefaultApi

All URIs are relative to *https://virtserver.swaggerhub.com/grze.musz/Bookstore/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookIsbnGet**](DefaultApi.md#bookisbnget) | **GET** /book/{isbn} | 
[**booksGet**](DefaultApi.md#booksget) | **GET** /books | 
[**booksPost**](DefaultApi.md#bookspost) | **POST** /books | 

# **bookIsbnGet**
> \Swagger\Client\Model\Book bookIsbnGet($isbn)



Obtain information about book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isbn = "isbn_example"; // string | 

try {
    $result = $apiInstance->bookIsbnGet($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bookIsbnGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isbn** | **string**|  |

### Return type

[**\Swagger\Client\Model\Book**](../Model/Book.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booksGet**
> \Swagger\Client\Model\Book[] booksGet($limit, $offset)



Returns a list of books

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Limits the number of books on a page
$offset = 56; // int | Specifies the page number

try {
    $result = $apiInstance->booksGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->booksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of books on a page | [optional]
 **offset** | **int**| Specifies the page number | [optional]

### Return type

[**\Swagger\Client\Model\Book[]**](../Model/Book.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **booksPost**
> booksPost($body)



Post a new book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Book(); // \Swagger\Client\Model\Book | 

try {
    $apiInstance->booksPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->booksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Book**](../Model/Book.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


