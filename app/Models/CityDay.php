<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityDay extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
