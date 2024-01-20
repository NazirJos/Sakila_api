<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // get all records
    public function index(){
        return Customer::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'store_id' => 'required',
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required',
        //     'address_id' => 'required',
        //     'create_date' => 'required',
        //     'last_update' => 'required'
        // ]);
        return Customer::create($request->all());
    }

    //get a single record
    public function show($id){
        return Customer::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Customer::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Customer::destroy($id);
    }

    // search
    public function search($name){
        return Customer::where('first_name', 'like', '%'.$name.'%')->get();
    }
}
