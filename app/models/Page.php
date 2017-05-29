<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    protected $table = 'page';

    public function sections()
    {
        return $this->hasMany('App\models\Section')->orderBy('id');
    }
}