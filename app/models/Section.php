<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
    protected $table = 'page_sections';

    public function page()
    {
        return $this->belongsTo('App\models\Page');
    }

    public function images()
    {
        return $this->hasMany('App\models\Background');
    }

}