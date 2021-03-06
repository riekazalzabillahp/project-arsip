<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    protected $table = 'restorans';
    protected $guarded = [];

    public static function totalRestoran() {
        return Restoran::count();
    }
}
