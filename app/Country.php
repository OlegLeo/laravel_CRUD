<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';



    protected $fillable = [
        'id',
        'code',
        'name'
    ];





    /*public function countries(){
        return $this->hasOne(Player::class);

    }*/

    public function player(){
        return $this->hasOne(Player::class);

    }


}
