<?php

namespace bpjs\pcare\v1;

use GuzzleHttp\Client;

class Dokter extends \bpjs\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($start = 0, $limit = 10)
    {
        $response = $this->client->request(
            'GET',
            'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/dokter/'.$start.'/'.$limit,
            ['headers' => $this->headers]
        )
        ->getBody()->getContents();

        return json_decode($response, true);
    }
}
