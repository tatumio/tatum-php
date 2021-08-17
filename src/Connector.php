<?php

namespace Tatum;

use Requests;
use Dotenv\Dotenv;

class Connector
{
    private const BASE_URL = 'https://api-eu1.tatum.io/v3/';

    /**
     * @param string $url
     * @return mixed
     */
    public static function get(string $url)
    {
        $body = Requests::get(self::BASE_URL . $url, self::headers())->body;
        return self::response($body);
    }

    /**
     * Parse json response.
     *
     * @param string $body
     * @return mixed
     */
    private static function response(string $body)
    {
        return json_decode($body);
    }

    /**
     * @return array<string>
     */
    private static function headers(): array
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        return [
            'x-api-key' => $_ENV['TATUM_API_KEY'],
            'Accept' => 'application/json'
        ];
    }
}
