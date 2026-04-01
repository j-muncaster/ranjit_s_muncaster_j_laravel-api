<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $fillable = [
        'toy_name',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}