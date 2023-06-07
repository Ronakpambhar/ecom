<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;

class SubcategoriesController extends Controller
{
    public function GetSubCat(){
        $cat = Categories::get();
        $subcat = Subcategories::get();
        return view('admin.subcategries')->with('categories',$cat)->with('subcategories', $subcat);
        
    }
}
