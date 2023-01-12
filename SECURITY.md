# Security Policy

## Reporting a vulnerability

Please do not open GitHub issues or pull requests - this makes the problem immediately visible to everyone, including malicious actors.

Security issues in this open-source project can be safely reported to Tatum's [HelpDesk](https://support.tatum.io/support/tickets/new?ticket_form=technical_problems_and_questions).

Tatum's security team will triage your report and respond according to its impact on Tatum users and systems.

## SSL is mandatory

All API calls use SSL by default. For security reasons, please never set `CURLOPT_SSL_VERIFYPEER = 0` or `CURLOPT_SSL_VERIFYHOST = 0` in cURL requests.

If you receive an `ApiException` related to SSL, please make sure you have configured your cURL and SSL correctly.

1. Download [cacert.pem](https://curl.se/ca/cacert.pem) or use the one that came with your PHP installation
2. Edit `php.ini` and set the following:
    * `curl.cainfo` = "{path to cacert.pem}"
    * `openssl.cafile` = "{path to cacert.pem}"

## Keep your API keys private

Never disclose your Tatum API keys and never use them in plain-text in your code.

:x: **BAD**
```php
new \Tatum\Sdk('mainnet-key', 'testnet-key');
```

:white_check_mark: **GOOD**
```php
// Keys passed as environment variables
new \Tatum\Sdk(getenv('TATUM_MAINNET_KEY'), getenv('TATUM_TESTNET_KEY'));

// Keys loaded from an external source
new \Tatum\Sdk($tatumMainnetKey, $tatumTestnetKey);
```

## Supported Versions

The following releases are currently being supported for security updates:

| Version | Supported          |
| ------- | ------------------ |
| 2.x.x   | :white_check_mark: |
| 1.0.x   | :x:                |

Please switch to one of the supported versions as soon as possible.