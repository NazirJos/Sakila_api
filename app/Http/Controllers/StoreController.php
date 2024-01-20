<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // get all records
    public function index(){
        return Store::all();
    }

    //save new record
    public function Store(Request $request){
        // $request->validate([
        //     'manager_staff_id' => 'required',
        //     'address_id' => 'required',
        //     'last_update' => 'required',
        // ]);
        return Store::create($request->all());
    }

    //get a single record
    public function show($id){
        return Store::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Store::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Store::destroy($id);
    }

    // search
    // public function search($name){
    //     return Store::where('title', 'like', '%'.$name.'%')
    //     ->orWhere('description', 'like', '%'.$name.'%')
    //     ->orWhere('release_year', 'like', '%'.$name.'%')
    //     ->get();
    // }
}
