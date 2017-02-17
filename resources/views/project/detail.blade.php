@extends('layout')

@section('content')
    <div class="row">
        <a href="{{ route('home') }}"><span class="glyphicon glyphicon-chevron-left"></span> Return to Project Listings</a>
    </div>
    <div id="project-info">
        <div class="page-header row">
            <h2 class="heading">{{ $title  }}</h2>
        </div>
        <div class="project-details row">
            <div class="project-meta col-md-8">
                <dl>
                @if(!is_null($project->description))
                    <dt>Description</dt>
                    <dd>{{ $project->description }}</dd>
                @endif
                    <dt>Created On</dt>
                    <dd>{{$project->project_created}}</dd>
                    <dt>Date of Last Push</dt>
                    <dd>{{$project->last_push}}</dd>
                </dl>
            </div>
            <div class="project-links col-md-4">
                <div class="row">
                    <a href="{{ $project->url }}" target="_blank" class="btn btn-primary btn-block" target="_blank" title="View this Project On GitHub">View on GitHub</a>
                    <a href="{{ $project->url }}/stargazers" class="btn btn-default btn-block" target="_blank" title="View Stargazers on GitHub"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> {{$project->stars }} Stargazers</a>
                </div>
            </div>
        </div>

    </div>
@endsection