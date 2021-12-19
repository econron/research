<?php

namespace api;

require 'vendor/autoload.php';

use GuzzleHttp\Client;

class ApiCaller
{
    public function action_index()
    {
        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com/todos/',
        ]);

        $response = $client->request($method);

        $list = json_decode($response->getBody()->getContents(), true);

        return $list;
    }
}

$apiCaller = new ApiCaller();

var_dump($apiCaller->action_index());