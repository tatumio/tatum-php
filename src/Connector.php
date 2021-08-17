<?php

namespace Tatum;

use Requests;
use Dotenv\Dotenv;

class Connector
{
    private const BASE_URL = 'https://api-eu1.tatum.io/v3/';

    /**
     * Get method.
     *
     * @param string $url
     * @return mixed
     */
    public static function get(string $url)
    {
        $response = Requests::get(self::BASE_URL . $url, self::headers())->body;
        return self::response($response);
    }

    /**
     * Delete method.
     *
     * @param string $url
     * @return mixed
     */
    public static function delete(string $url)
    {
        $response = Requests::delete(self::BASE_URL . $url, self::headers())->body;
        return self::response($response);
    }

    /**
     * Post method.
     *
     * @param string        $url
     * @param array<string> $body
     * @return mixed
     */
    public static function post(string $url, array $body)
    {
        $response = Requests::post(
            self::BASE_URL . $url,
            self::headers(),
            $body
        )->body;
        return self::response($response);
    }

    /**
     * Put method.
     *
     * @param string        $url
     * @param array<string> $body
     * @return mixed
     */
    public static function put(string $url, array $body)
    {
        $response = Requests::put(
            self::BASE_URL . $url,
            self::headers(),
            $body
        )->body;
        return self::response($response);
    }

    /**
     * Parse json response.
     *
     * @param string $body
     * @return mixed
     */
    private static function response(string $body)
    {
        return json_decode($body, true);
    }

    /**
     * @return array<string>
     */
    private static function headers(): array
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->safeLoad();

        return [
            'x-api-key' => $_ENV['TATUM_API_KEY'],
            'Accept' => 'application/json'
        ];
    }
}
