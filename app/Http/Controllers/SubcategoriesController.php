<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;
use DB;

class SubcategoriesController extends Controller
{
    public function GetSubCat(){
        $subcat = DB::table('subcategories')->join('categories','subcategories.cat_name','=','categories.id')->get();
        $categories = Categories::get();
        return view('admin.subcategries')->with('subcat',$subcat)->with('categories',$categories);
    }
    public function AddSub(Request $request){
        $add = new Subcategories();
        $add->subcategory_name = $request->subname;
        $add->cat_name = $request->catname;
        if($add->save())
            return redirect('subcategries');
        
    }
}
