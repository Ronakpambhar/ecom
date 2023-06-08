<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;

class SubcategoriesController extends Controller
{
    public function GetSubCat(){
        $subcat = Subcategories::getSubcategories();
        return view('admin.subcategries')->with('subcat',$subcat);
    }
    public function AddSub(Request $request){
        $add = new Subcategories();
        $add->subcategory_name = $request->subname;
        $add->cat_name = $request->catname;
        if($add->save())
            return redirect('subcategries');
        
    }
}
