<?php

namespace App\Http\Controllers;

use App\Models\FilmText;
use Illuminate\Http\Request;

class FilmTextController extends Controller
{
    // get all records
    public function index(){
        return FilmText::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'film' => 'required',
        //     'description' => 'required',
        //     'release_year' => 'required'
        // ]);
        return FilmText::create($request->all());
    }

    //get a single record
    public function show($id){
        return FilmText::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = FilmText::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return FilmText::destroy($id);
    }

    // search
    public function search($name){
        return FilmText::where('title', 'like', '%'.$name.'%')
        ->orWhere('description', 'like', '%'.$name.'%')
        ->get();
    }
}
