<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function GetCat(){
        $categories = categories::all();
        return view('admin.categories')->with('categories', $categories);
    }
    public function AddCategory(Request $request){
        $request->validate([
            'categories'=> 'required|min:4',
        ],
        [
            'categories.required' => 'Category must be required.',
            'categories.min' => 'Minimum 4 character allowed.',
        ]);
        $add = New Categories();
        $add->category_name = $request->categories;
        if($add->save())
        {
            return redirect('categories');
        }
    }
    public function DelCat(Request $request){
        if (isset($request->id)){
            $categories = categories::find($request->id);
            if($categories->delete()){
                return response()->json([ 'status'=> 'success']);
            }
        }
    }
    public function EditeCat($id){
        $cat = categories::find($id);
        return response()->json([
           'status' =>200,
           'bookdata' =>$cat,
       ]);
   }
   public function Updatecat(Request $request)
   {
        $cat_id = $request->input('cat_id');
        $categories = categories::find($cat_id);
        $categories->category_name = $request->input('catname');
        if($categories->update())
        {
            return redirect('categories');
        }
   }

}
