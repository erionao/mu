<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $table = 'project';

    public function images()
    {
        return $this->hasMany('App\models\ProjectImage');
    }

    public function type()
    {
        return $this->belongsTo('App\models\ProjectType', 'type_id');
    }
}