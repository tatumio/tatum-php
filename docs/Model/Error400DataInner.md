---
title: Error400DataInner
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTarget()** | **array<string,mixed>** | Request object present in the body of the HTTP request |
**getValue()** | **float** | Value of the target object which validation is wrong. Can be of any data type, example here is using type number. | [optional]
**getProperty()** | **string** | Property name of the target object which validation is wrong | [optional]
**getConstraints()** | **array<string,mixed>** | Object of failed constraints for the target object. Key is the constraint, value is detailed description of the failed constraint. | [optional]

[[Back to Index]](../index.md)
