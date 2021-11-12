<?php
namespace App\Services;

use GuzzleHttp\Exception\GuzzleException;

interface ApiServiceInterface
{
    /**
     * @return array
     * @throws GuzzleException
     */
    public function getData(): array;
    public function getBaseUri();
    public function setBaseUri(string $baseUri);
    public function getEndpoint();
    public function setEndpoint(string $endpoint);
}
