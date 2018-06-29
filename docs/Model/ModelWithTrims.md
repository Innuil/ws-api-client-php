# ModelWithTrims

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**slug** | **string** | Model name (e.g. &#x60;Outlander&#x60;) | [optional] 
**name** | **string** | Model slug name (e.g. &#x60;outlander&#x60;) | [optional] 
**start_year** | **string** | Model production start year. It should be &#39;integer&#39; but it is used as &#39;string&#39; by historical reasons. | [optional] 
**end_year** | **string** | Model production end year. It should be &#39;integer&#39; but it is used as &#39;string&#39; by  historical reasons.  It equals to the __*&#x60;current year + 1&#x60;*__ if it is still in production. | [optional] 
**vehicles** | [**\WsApiClient\Model\TrimWithMarketAndYears[]**](TrimWithMarketAndYears.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


