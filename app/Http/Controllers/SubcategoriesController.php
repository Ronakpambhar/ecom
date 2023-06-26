<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;
use DB;

class SubcategoriesController extends Controller
{
    // GET CATEGORIES
    public function GetSubCat(){

        $subCategory = Subcategories::with('getCategory')->get();
        $categoryList = Categories::select('id','category_name')->get();
        return view('admin.subcategries')->with('subCategory',$subCategory)->with('categoryList',$categoryList);

    }
    // ADD CATEGORIES
    public function AddSub(Request $request){

        $request->validate([
            'subname'=>'required',
            'catname'=>'required'
        ],[
            'subname' => 'Subname must be required.',
            'catname' => 'Category must be required.',
        ]
        );
        $add = new Subcategories();
        $add->subcategory_name = $request->subname;
        $add->cat_name = $request->catname;
        if($add->save()){
            return redirect('subcategries');
        }
    }
    // EDITE CAT
    public function EditeSubCat($id){
        // $data = DB::table('subcategories')->join('categories','subcategories.cat_name','=','categories.id')->where('id', $id)->get();
        $data = Subcategories::find($id);
        // return dd ($data);
        return response()->json([
           'status' =>200,
           'subcat' =>$data,
       ]);
    }
    // DELETE CATEGORIES
    public function DelSubCat(Request $request){
        $id = $request->id;
        if (isset($id)){
            $categories = Subcategories::find($id);
            if($categories->delete()){
                return response()->json([ 'status'=> 'success']);
            }
        }
    }

    public function UpdateSubCat(Request $request){
            $id = $request->subcat_id;
            $data = Subcategories::find($id);
            $data->subcategory_name = $request->subcatname;
            $data->cat_name = $request->cat_name;
            if($data->update()){
                return redirect('subcategries');
            }
    }
}
