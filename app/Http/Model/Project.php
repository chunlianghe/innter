<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    public $timestamps = false;
    protected $guarded = [];
}
