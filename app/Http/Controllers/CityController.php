<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    // get all records
    public function index(){
        return City::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'city' => 'required',
        //     'country_id' => 'required',
        //     'last_update' => 'required'
        // ]);
        return City::create($request->all());
    }

    //get a single record
    public function show($id){
        return City::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = City::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return City::destroy($id);
    }

    // search
    public function search($name){
        return City::where('city', 'like', '%'.$name.'%')->get();
    }
}
