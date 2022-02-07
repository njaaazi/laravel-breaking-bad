<?php

namespace Njaaazi\BreakingBad\Api;

use GuzzleHttp\Client;

class AbstractApi
{
    private $api_base_url;

    public function __construct()
    {
        $this->api_base_url = config('breaking-bad.baseUrl');
    }

    public function getApiBaseUrl()
    {
        return $this->api_base_url;
    }

    public function call(string $endpoint, array $params = [], string $method = 'GET')
    {
        $client = new Client();

        return json_decode($client->request($method, $this->getApiBaseUrl() . $endpoint . '?' . http_build_query($params))->getBody()->getContents());
    }

    public function buildQuery(array $filters = [])
    {
        $queryFilters = [];
        foreach ($filters as $key => $value) {
            $queryFilters[] = "$key:$value";
        }

        return join("%20", $queryFilters);
    }
}
