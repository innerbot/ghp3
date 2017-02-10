<?php

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

$app->get('/load-more/{skip}', function ($skip) use ($app) {
    // TODO collect next NN results skipping the first $skip records
    // $projects = Project::find()->orderBy()->
    // return response()->json($projects);
});

$app->get('/', function () use ($app) {
    // $projects = Project::
    // return view('layout', compact('projects'));
});
