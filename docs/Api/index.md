---
title: API
has_children: true
layout: page
nav_order: 2
---

You can access any of the Tatum API endpoints with the following syntax:

```php
<?php
(new \Tatum\Sdk())->{testnet/mainnet}()->api();
```