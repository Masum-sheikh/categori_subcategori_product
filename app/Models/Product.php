<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'sub_category_id'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
}
