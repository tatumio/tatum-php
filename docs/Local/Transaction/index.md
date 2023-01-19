---
title: Local/Transaction
has_children: true
layout: page
nav_order: 4
---

Local transaction signing operations:

```php
$sdk = new \Tatum\Sdk();

// MainNet Local Transaction Operations
$sdk->mainnet()->local()->transaction();

// TestNet Local Transaction Operations
$sdk->testnet()->local()->transaction();
```
