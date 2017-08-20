<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcelFile extends Model
{
    protected $table = 'excels';
    public $timestamps = false;
    protected $fillable = ['material', 'designation', 'gross', 'currency', 'price_factor', 'unit_price'];
}
