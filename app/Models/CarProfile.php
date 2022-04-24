<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProfile extends Model
{
    protected $table = 'car_profiles';
    protected $primaryKey = 'id';
    protected $fillable = ['make', 'model', 'fuel_type','year','number_plate'];
}
