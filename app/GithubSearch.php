<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class GithubSearch
{
    protected $api_endpoint = "https://api.github.com/search";
    protected $client;
    protected $valid_params = ["q","sort","order"];

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->api_endpoint
        ]);
    }

    public function search($search_in, Array $params)
    {
        try {
            return $this->client->get( $search_in, [
                'query' => $params
            ]);
        }

        catch(TransferException $e)
        {

        }
    }

    public function searchRepos(Array $params)
    {
        return $this->search('repositories', $params);
    }

}
