<?php

use Illuminate\Database\Seeder;
use Github\Client;
use Github\ResultPager;
use App\Project;

class GithubPopularPhpProjects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $searchApi = $client->api('search');

        $paginator = new ResultPager($client);

        $parameters = array('language:php', 'stars', 'desc');

        $repos = $paginator->fetchAll($searchApi, 'repositories', $parameters);

        echo "Collected " . count($repos) . " projects to add to the database\n\n";
        foreach($repos as $k => $repo) {
            $num = $k+1;
            echo "$num. " .  ucwords($repo['name']) . " ";
            $project_exists = Project::where('repository_id', $repo['id'])->first();

            $project_fields = array(
                'repository_id' => $repo['id'],
                'name' => $repo['name'],
                'url' => $repo['url'],
                'description' => $repo['description'],
                'stars' => $repo['stargazers_count'],
                'project_created' => $repo['created_at'],
                'last_push' => $repo['pushed_at']
            );

            if( !$project_exists ) {
                $project = new Project($project_fields);
                $project->save();

                echo "- Created\n";
            } else {
                Project::where('repository_id', $repo['id'])
                       ->update($project_fields);
                echo "- Updated\n";
            }
        }


    }
}
