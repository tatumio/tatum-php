---
title: Error400DataInner
parent: Model
layout: page
---

# Error400DataInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTarget()** | **array<string,mixed>** | Request object present in the body of the HTTP request <br>Example: `{&quot;property&quot;:12345}` |
**getValue()** | **float** | Value of the target object which validation is wrong. Can be of any data type, example here is using type number. <br>Example: `12345` | [optional]
**getProperty()** | **string** | Property name of the target object which validation is wrong <br>Example: `property1` | [optional]
**getConstraints()** | **array<string,mixed>** | Object of failed constraints for the target object. Key is the constraint, value is detailed description of the failed constraint. <br>Example: `{&quot;min&quot;:&quot;property1 must not be less than 50000&quot;}` | [optional]

