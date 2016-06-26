<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Seance extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'seances';
    public $timestamps = true;
    protected $fillable = [
        'start_time',
        'place',
        'price',
        'description',
        'speaker_info',
        'images',
        'videos',
        'properties',
    ];
    protected $fakeColumns = [
        'images',
        'videos',
        'properties'
    ];
    protected $dates = ['start_time'];
    // protected $hidden = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function program()
    {
        return $this->belongsTo('App\Models\Program');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
