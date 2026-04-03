<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'tbl_brands';
    
    protected $fillable = ['brand_name', 'brand_description', 'brand_country'];

    public function toys()
    {
        return $this->hasMany(Toy::class, 'brand_id');
    }
}