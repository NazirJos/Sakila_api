<?php

namespace App\Http\Controllers;

use App\Models\FilmActor;
use Illuminate\Http\Request;

class FilmActorController extends Controller
{
    // get all records
    public function index(){
        return FilmActor::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'last_update' => 'required'
        // ]);
        return FilmActor::create($request->all());
    }

    //get a single record
    public function show($id){
        return FilmActor::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = FilmActor::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return FilmActor::destroy($id);
    }

    // // search
    // public function search($name){
    //     return FilmActor::where('first_name', 'like', '%'.$name.'%')->get();
    // }
}
