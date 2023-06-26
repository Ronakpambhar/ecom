<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class subcategories extends Model
{
    use HasFactory;
    protected $table = "subcategories";

    public function getCategory(){
        return $this->belongsTo(Categories::class,'cat_name','id');
    }
}
