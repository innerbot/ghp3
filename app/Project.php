<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * @var  string The table associated with the model
     */
    protected $table = "projects";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'repository_id', 'name', 'description', 'url', 'stars', 'project_created', 'project_last_push'
    ];

}
