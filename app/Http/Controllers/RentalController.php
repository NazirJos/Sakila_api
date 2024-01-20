<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // get all records
    public function index(){
        return Rental::all();
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
        return Rental::create($request->all());
    }

    //get a single record
    public function show($id){
        return Rental::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Rental::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Rental::destroy($id);
    }

    // search
    // public function search($name){
    //     return Rental::where('title', 'like', '%'.$name.'%')
    //     ->orWhere('description', 'like', '%'.$name.'%')
    //     ->orWhere('release_year', 'like', '%'.$name.'%')
    //     ->get();
    // }
}
