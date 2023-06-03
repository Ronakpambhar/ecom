<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function GetCat(){
        $categories = categories::get();
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
}
