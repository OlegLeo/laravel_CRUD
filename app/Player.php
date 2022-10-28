<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{


    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/players';


    protected $table = 'players';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'description',
        'retired',
        'country_id'
    ];

    public function country()
    {

        return $this->belongsTo(Country::class);
    }



}
