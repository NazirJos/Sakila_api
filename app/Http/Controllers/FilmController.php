<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // get all records
    public function index(){
        return Film::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'film' => 'required',
        //     'description' => 'required',
        //     'release_year' => 'required'
        // ]);
        return Film::create($request->all());
    }

    //get a single record
    public function show($id){
        return Film::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Film::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Film::destroy($id);
    }

    // search
    public function search($name){
        return Film::where('title', 'like', '%'.$name.'%')
        ->orWhere('description', 'like', '%'.$name.'%')
        ->orWhere('release_year', 'like', '%'.$name.'%')
        ->get();
    }
}
