<a href="{{ route('project', ['id' => $project->id ]) }}" class="list-group-item">
    <span class="badge"><span class="glyphicon glyphicon-star"></span> {{ $project->stars }}</span>
    <h3 class="list-group-item-heading">{{ title_case($project->name) }}</h3>
    <p class="list-group-item-text">{{$project->description or "Check them out on GitHub!" }}</p>
</a>