<?php

use App\Project;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', [ 'as' => 'home', function (Illuminate\Http\Request $request) {
    $projects = Project::orderBy('stars','desc')
                            ->paginate(25);
    return view('home', compact('projects', 'request'));
}]);

$app->get('project/{id}', ['as'=>'project', function($id) {
    $project = Project::find($id);
    $title = title_case($project->name);
    return view('project.detail', compact('title', 'project'));
}]);
