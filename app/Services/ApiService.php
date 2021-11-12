<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiService implements ApiServiceInterface
{
    /**
     * @var string
     */
    public string $baseUri = 'https://www.thecocktaildb.com/api/json/v1/1/';
    /**
     * @var string
     */
    public string $endpoint = 'search.php?s=';
    /**
     * @var string
     */
    public string $method = 'GET';

    /**
     * @return array
     * @throws GuzzleException
     */
    public function getData(): array
    {
        $client = new Client(['base_uri' => $this->getBaseUri()]);

        $response = $client->request(
            $this->getMethod(),
            $this->getEndpoint()
        );


        $data = [];

        if ($response->getStatusCode() >= 200) {
            $data = json_decode($response->getBody()->getContents(), true);
        }

        return $data;
    }


    /**
     * @return string
     */
    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    /**
     * @param string $baseUri
     */
    public function setBaseUri(string $baseUri): ApiService
    {
        $this->baseUri = $baseUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint(string $endpoint): ApiService
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): ApiService
    {
        $this->method = $method;
        return $this;
    }
}
