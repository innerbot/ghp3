<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\GithubSearch;

class GithubSeedDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:seed-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate DB w/ Popular PHP Projects via Github API';

    /**
     * The Github API Search Wrapper
     *
     * @var GithubSearch
     */
    protected $api;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->api = new GithubSearch();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $search_parameters = 'q=language:php&sort=stars&order=desc';
        $search_params_array = [
            'q' => "language:php",
            'sort' => 'stars',
            'order' => 'desc'
        ];

        $response = $this->api->search('repositories', $search_params_array);


    }
}
