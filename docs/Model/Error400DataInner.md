# Error400DataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**target** | **array<string,mixed>** | Request object present in the body of the HTTP request |
**value** | **float** | Value of the target object which validation is wrong. Can be of any data type, example here is using type number. | [optional]
**property** | **string** | Property name of the target object which validation is wrong | [optional]
**constraints** | **array<string,mixed>** | Object of failed constraints for the target object. Key is the constraint, value is detailed description of the failed constraint. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
