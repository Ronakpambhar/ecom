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
        $subcat = DB::table('subcategories')->join('categories','subcategories.cat_name','=','categories.id')->get();
        $categories = Categories::get();
        return view('admin.subcategries')->with('subcat',$subcat)->with('categories',$categories);
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
        $data = DB::table('subcategories')->where('subcategory_id', $id)->get();
        return response()->json([
           'status' =>200,
           'subcat' =>$data,
       ]);
    }
    // DELETE CATEGORIES
    public function DelSubCat(Request $request){
        $id = $request->id;
        if (isset($id)){
            $categories = Subcategories::where('subcategory_id',$id);
            if($categories->delete()){
                return response()->json([ 'status'=> 'success']);
            }
        }
    }
    public function UpdateSubCat(Request $request){
        // if(isset($request->subcatid)){
            $id = $request->subcat_id;
            $data = Subcategories::where($id);
            $data->subcategory_name = $request->input('subcatname');
            $data->cat_name = $request->input('catname');
            if($data->update()){
                return redirect('subcategries');
            }
        // }
    }
}
