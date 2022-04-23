<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = ['apsilankymo_data', 'busena', 'gedimo_aprasymas', 'autoservisas', 'marke', 'valstybinis_numeris', 'rida'];
}
