<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $table = 'tbl_toys';

    protected $fillable = ['toy_name', 'toy_description', 'toy_price', 'toy_brand'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'toy_brand');
    }
}