<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // get all records
    public function index(){
        return Language::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'film' => 'required',
        //     'description' => 'required',
        //     'release_year' => 'required'
        // ]);
        return Language::create($request->all());
    }

    //get a single record
    public function show($id){
        return Language::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Language::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Language::destroy($id);
    }

    // search
    public function search($name){
        return Language::where('name', 'like', '%'.$name.'%')
        ->get();
    }
}
