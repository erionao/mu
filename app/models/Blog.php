<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;




/**
 * Created by PhpStorm.
 * User: Blini
 * Date: 12/21/2016
 * Time: 9:03 PM
 */
class Blog extends Model
{
    protected $table = 'blog';


    public function images()
    {
        return $this->hasMany('App\models\BlogImage');
    }
}