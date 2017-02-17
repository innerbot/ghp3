@extends('layout')

@section('content')
    @if(null === $request->input('page'))
        @include('welcome')
    @endif
    <h1 class="heading">GitHub's Top 1,000 PHP Projects <small>Ranked by <strong>#</strong> of <span class="glyphicon glyphicon-star"></span>'s</small></h1>
    <div class="row text-center">{{ $projects->links() }}</div>
    <div class="list-group">
        @each('project.summary', $projects, 'project', 'project.empty')
    </div>
    <div class="row text-center">{{ $projects->links() }}</div>
@endsection