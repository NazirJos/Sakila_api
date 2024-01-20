<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // get category
    public function index(){
        return Category::all();
    }

    //save new category record
    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'last_update' => 'required'
        // ]);
        return Category::create($request->all());
    }

    //get a single category
    public function show($id){
        return Category::find($id);
    }

    // update a category data
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->update($request->all());
        return $category;
    }

    // delete a category data
    public function destroy($id) {
        return Category::destroy($id);
    }

    // search for a category
    public function search($name){
        return Category::where('name', 'like', '%'.$name.'%')->get();
    }

}
