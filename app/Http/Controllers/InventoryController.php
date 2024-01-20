<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // get all records
    public function index(){
        return Inventory::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'film' => 'required',
        //     'description' => 'required',
        //     'release_year' => 'required'
        // ]);
        return Inventory::create($request->all());
    }

    //get a single record
    public function show($id){
        return Inventory::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Inventory::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Inventory::destroy($id);
    }

    // search
    // public function search($name){
    //     return Inventory::where('title', 'like', '%'.$name.'%')
    //     ->orWhere('description', 'like', '%'.$name.'%')
    //     ->orWhere('release_year', 'like', '%'.$name.'%')
    //     ->get();
    // }
}
