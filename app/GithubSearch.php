<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class GithubSearch
{
    protected $api_endpoint = "https://api.github.com/search/";
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->api_endpoint
        ]);
    }

    public function search($search_in, Array $params = array())
    {
        try {
            if(!empty($params)) {
                return $this->client->request( 'GET', $search_in, [
                    'headers' => ['User-Agent' => 'innerbot/ghp3'],
                    'query' => $params
                ]);
            } else {
                return $this->client->request( 'GET', $search_in );
            }
        }

        catch(Exception $e)
        {
            abort(500, $e->getMessage() );
        }
    }

    public function searchRepos($params)
    {
        return $this->search('repositories?' . $params);
    }

}
