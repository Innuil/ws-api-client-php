# WsApiClient\BoltPatternsApi

All URIs are relative to *https://api.wheel-size.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boltPatternsList**](BoltPatternsApi.md#boltPatternsList) | **GET** /bolt-patterns/ | Get list of bolt patterns
[**boltPatternsRead**](BoltPatternsApi.md#boltPatternsRead) | **GET** /bolt-patterns/{bolt_pattern}/ | Model modifications by bolt pattern


# **boltPatternsList**
> \WsApiClient\Model\BoltPattern[] boltPatternsList($stud, $stud_min, $stud_max, $pcd, $pcd_min, $pcd_max, $brands, $brands_exclude, $countries, $countries_exclude)

Get list of bolt patterns

A list of possible bolt patterns with the number of matching model modifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WsApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WsApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WsApiClient\Api\BoltPatternsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stud = 8.14; // float | Number of stud holes (e.g. `5`)
$stud_min = 8.14; // float | Lower bound for number of stud holes (e.g. `4`)
$stud_max = 8.14; // float | Upper bound for number of stud holes (e.g. `7`)
$pcd = 8.14; // float | Pitch circle diameter, mm (e.g. `115`)
$pcd_min = 8.14; // float | Lower bound for pitch circle diameter, mm (e.g. `105`)
$pcd_max = 8.14; // float | Upper bound for pitch circle diameter, mm (e.g. `135`)
$brands = "brands_example"; // string | Show information only for specified manufacturers. Use _**`GET /makes/`**_ method to get the full list. (e.g. `mitsubishi,nissan,toyota`)
$brands_exclude = "brands_exclude_example"; // string | Don't show information for specified manufacturers. Use _**`GET /makes/`**_ method to get the full list. (e.g. `geely,great-wall`)
$countries = "countries_example"; // string | Show information for local manufacturers from specified countries only. Use _**`GET /countries/`**_ method to get the full list of countries. (e.g. `us,gb,jp`)
$countries_exclude = "countries_exclude_example"; // string | Don't show information for local manufacturers from specified countries. Use _**`GET /countries/`**_ method to get the full list of countries. (e.g. `ru,ua`)

try {
    $result = $apiInstance->boltPatternsList($stud, $stud_min, $stud_max, $pcd, $pcd_min, $pcd_max, $brands, $brands_exclude, $countries, $countries_exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoltPatternsApi->boltPatternsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stud** | **float**| Number of stud holes (e.g. &#x60;5&#x60;) | [optional]
 **stud_min** | **float**| Lower bound for number of stud holes (e.g. &#x60;4&#x60;) | [optional]
 **stud_max** | **float**| Upper bound for number of stud holes (e.g. &#x60;7&#x60;) | [optional]
 **pcd** | **float**| Pitch circle diameter, mm (e.g. &#x60;115&#x60;) | [optional]
 **pcd_min** | **float**| Lower bound for pitch circle diameter, mm (e.g. &#x60;105&#x60;) | [optional]
 **pcd_max** | **float**| Upper bound for pitch circle diameter, mm (e.g. &#x60;135&#x60;) | [optional]
 **brands** | **string**| Show information only for specified manufacturers. Use _**&#x60;GET /makes/&#x60;**_ method to get the full list. (e.g. &#x60;mitsubishi,nissan,toyota&#x60;) | [optional]
 **brands_exclude** | **string**| Don&#39;t show information for specified manufacturers. Use _**&#x60;GET /makes/&#x60;**_ method to get the full list. (e.g. &#x60;geely,great-wall&#x60;) | [optional]
 **countries** | **string**| Show information for local manufacturers from specified countries only. Use _**&#x60;GET /countries/&#x60;**_ method to get the full list of countries. (e.g. &#x60;us,gb,jp&#x60;) | [optional]
 **countries_exclude** | **string**| Don&#39;t show information for local manufacturers from specified countries. Use _**&#x60;GET /countries/&#x60;**_ method to get the full list of countries. (e.g. &#x60;ru,ua&#x60;) | [optional]

### Return type

[**\WsApiClient\Model\BoltPattern[]**](../Model/BoltPattern.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boltPatternsRead**
> \WsApiClient\Model\MakeWithModels[] boltPatternsRead($bolt_pattern, $rim_diameter, $rim_width, $offset, $offset_min, $offset_max, $cb, $cb_min, $cb_max, $lang, $brands, $brands_exclude, $countries, $countries_exclude)

Model modifications by bolt pattern

Get a list of model modifications matching to the given bolt pattern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WsApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WsApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WsApiClient\Api\BoltPatternsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bolt_pattern = "\"5x105\""; // string | Bolt pattern combines number of stud holes and pitch circle diameter. Use _**`GET /bolt-patterns/`**_ to get possible values (e.g. `5x105`)
$rim_diameter = 8.14; // float | Rim diameter, in (e.g. `16`)
$rim_width = 8.14; // float | Rim width, in (e.g. `7`)
$offset = 8.14; // float | Rim offset, mm (e.g. `40`)
$offset_min = 8.14; // float | Lower bound for rim offset, mm (e.g. `35`)
$offset_max = 8.14; // float | Upper bound for rim offset, mm (e.g. `45`)
$cb = 8.14; // float | Centre bore value, mm (e.g. `60`)
$cb_min = 8.14; // float | Lower bound for centre bore value, mm (e.g. `55`)
$cb_max = 8.14; // float | Upper bound for centre bore value, mm (e.g. `65`)
$lang = "lang_example"; // string | Use this parameter anywhere in the API to get *`name`* field translation of the following objects: **`Make`**, **`Model`**, **`Market`**. Across the *`name`* this objects will have *`name_en`* field with original english name. By default `en` language is used.  Available languages: `en,de,ru,es,pt,fr,ja,zh-cn`. Currently translation works for chinese `zh-cn` language only
$brands = "brands_example"; // string | Show information only for specified manufacturers. Use _**`GET /makes/`**_ method to get the full list. (e.g. `mitsubishi,nissan,toyota`)
$brands_exclude = "brands_exclude_example"; // string | Don't show information for specified manufacturers. Use _**`GET /makes/`**_ method to get the full list. (e.g. `geely,great-wall`)
$countries = "countries_example"; // string | Show information for local manufacturers from specified countries only. Use _**`GET /countries/`**_ method to get the full list of countries. (e.g. `us,gb,jp`)
$countries_exclude = "countries_exclude_example"; // string | Don't show information for local manufacturers from specified countries. Use _**`GET /countries/`**_ method to get the full list of countries. (e.g. `ru,ua`)

try {
    $result = $apiInstance->boltPatternsRead($bolt_pattern, $rim_diameter, $rim_width, $offset, $offset_min, $offset_max, $cb, $cb_min, $cb_max, $lang, $brands, $brands_exclude, $countries, $countries_exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoltPatternsApi->boltPatternsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bolt_pattern** | **string**| Bolt pattern combines number of stud holes and pitch circle diameter. Use _**&#x60;GET /bolt-patterns/&#x60;**_ to get possible values (e.g. &#x60;5x105&#x60;) |
 **rim_diameter** | **float**| Rim diameter, in (e.g. &#x60;16&#x60;) | [optional]
 **rim_width** | **float**| Rim width, in (e.g. &#x60;7&#x60;) | [optional]
 **offset** | **float**| Rim offset, mm (e.g. &#x60;40&#x60;) | [optional]
 **offset_min** | **float**| Lower bound for rim offset, mm (e.g. &#x60;35&#x60;) | [optional]
 **offset_max** | **float**| Upper bound for rim offset, mm (e.g. &#x60;45&#x60;) | [optional]
 **cb** | **float**| Centre bore value, mm (e.g. &#x60;60&#x60;) | [optional]
 **cb_min** | **float**| Lower bound for centre bore value, mm (e.g. &#x60;55&#x60;) | [optional]
 **cb_max** | **float**| Upper bound for centre bore value, mm (e.g. &#x60;65&#x60;) | [optional]
 **lang** | **string**| Use this parameter anywhere in the API to get *&#x60;name&#x60;* field translation of the following objects: **&#x60;Make&#x60;**, **&#x60;Model&#x60;**, **&#x60;Market&#x60;**. Across the *&#x60;name&#x60;* this objects will have *&#x60;name_en&#x60;* field with original english name. By default &#x60;en&#x60; language is used.  Available languages: &#x60;en,de,ru,es,pt,fr,ja,zh-cn&#x60;. Currently translation works for chinese &#x60;zh-cn&#x60; language only | [optional]
 **brands** | **string**| Show information only for specified manufacturers. Use _**&#x60;GET /makes/&#x60;**_ method to get the full list. (e.g. &#x60;mitsubishi,nissan,toyota&#x60;) | [optional]
 **brands_exclude** | **string**| Don&#39;t show information for specified manufacturers. Use _**&#x60;GET /makes/&#x60;**_ method to get the full list. (e.g. &#x60;geely,great-wall&#x60;) | [optional]
 **countries** | **string**| Show information for local manufacturers from specified countries only. Use _**&#x60;GET /countries/&#x60;**_ method to get the full list of countries. (e.g. &#x60;us,gb,jp&#x60;) | [optional]
 **countries_exclude** | **string**| Don&#39;t show information for local manufacturers from specified countries. Use _**&#x60;GET /countries/&#x60;**_ method to get the full list of countries. (e.g. &#x60;ru,ua&#x60;) | [optional]

### Return type

[**\WsApiClient\Model\MakeWithModels[]**](../Model/MakeWithModels.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

