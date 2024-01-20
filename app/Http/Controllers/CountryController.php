<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // get all records
    public function index(){
        return Country::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'country' => 'required',
        //     'last_update' => 'required'
        // ]);
        return Country::create($request->all());
    }

    //get a single record
    public function show($id){
        return Country::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Country::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Country::destroy($id);
    }

    // search
    public function search($name){
        return Country::where('country', 'like', '%'.$name.'%')->get();
    }
}
