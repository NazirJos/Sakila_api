<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // get all records
    public function index(){
        return Staff::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'customer_id' => 'required',
        //     'staff_id' => 'required',
        //     'rental_id' => 'required',
        //     'amount' => 'required',
        //     'payment_date' => 'required',
        // ]);
        return Staff::create($request->all());
    }

    //get a single record
    public function show($id){
        return Staff::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Staff::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Staff::destroy($id);
    }

    // search
    public function search($name){
        return Staff::where('first_name', 'like', '%'.$name.'%')
        ->orWhere('last_name', 'like', '%'.$name.'%')
        ->get();
    }
}
