---
title: API
has_children: true
layout: page
nav_order: 2
---

You can access any of the Tatum API endpoints with the following syntax:

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Operations
$sdk->mainnet()->api();

// TestNet API Operations
$sdk->testnet()->api();
```