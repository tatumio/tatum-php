---
title: Local/Wallet
has_children: true
layout: page
nav_order: 3
---

Local wallet operations:

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local Wallet Operations
$sdk->mainnet()->local()->wallet();

// TestNet Local Wallet Operations
$sdk->testnet()->local()->wallet();
```