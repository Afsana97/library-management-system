<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add');
    }
    public function store(Request $request){
        Category::saveCategory($request);
        return back()->with('msg','Category Added successfully!!');
    }
    public function manage(){
        return view('admin.category.manage',['categories' => Category::all() ]);
    }
    public function edit($id){
        return view('admin.category.edit',['category' => Category::find($id)]);
    }
    public function update(Request $request,$id){
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('msg','Category updatd successfully!!');
    }
    public function destroy($id){
        Category::destroyCategory($id);
        return redirect('/category/manage')->with('msg','Category deleted successfully!!');
    }
}
