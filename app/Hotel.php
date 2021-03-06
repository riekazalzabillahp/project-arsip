<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel';
    protected $guarded = [];

    public static function totalHotel() {
        return Hotel::count();
    }
}
