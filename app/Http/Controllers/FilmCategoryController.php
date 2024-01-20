<?php

namespace App\Http\Controllers;

use App\Models\FilmCategory;
use Illuminate\Http\Request;

class FilmCategoryController extends Controller
{
    // get all records
    public function index(){
        return FilmCategory::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'last_update' => 'required'
        // ]);
        return FilmCategory::create($request->all());
    }

    //get a single record
    public function show($id){
        return FilmCategory::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = FilmCategory::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return FilmCategory::destroy($id);
    }

    // search
    // public function search($name){
    //     return FilmCategory::where('category', 'like', '%'.$name.'%')->get();
    // }
}
