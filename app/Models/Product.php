<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'zcplat_products';


    public function company()
    {
        return $this->belongsTo(Company::class, 'compID', 'compID')->select('id', 'compID', 'compName');
    }
}
