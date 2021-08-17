<?php

namespace Tatum;

use phpDocumentor\Reflection\Types\Mixed_;
use Requests;

class Connector
{
    private const BASE_URL = 'https://api-eu1.tatum.io/v3/';

    private const HEADERS = [
        'x-api-key' => '7dd5bcaf-f22c-4be8-8cf7-43175828c8aa',
        'Accept' => 'application/json'
    ];

    /**
     * @param string $url
     * @return mixed
     */
    public static function get(string $url)
    {
        $body = Requests::get(self::BASE_URL . $url, self::HEADERS)->body;
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
}
