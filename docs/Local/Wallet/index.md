---
title: Local/Wallet
has_children: true
layout: page
nav_order: 3
---

Local wallet operations:

```php
<?php
$sdk = new \Tatum\Sdk();

// MainNet Local Wallet Operations
$sdk->mainnet()->local()->wallet();

// TestNet Local Wallet Operations
$sdk->testnet()->local()->wallet();
```