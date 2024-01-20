<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // get all records
    public function index(){
        return Payment::all();
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
        return Payment::create($request->all());
    }

    //get a single record
    public function show($id){
        return Payment::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $rec = Payment::find($id);
        $rec->update($request->all());
        return $rec;
    }

    // delete a record
    public function destroy($id) {
        return Payment::destroy($id);
    }

    // search
    // public function search($name){
    //     return Payment::where('title', 'like', '%'.$name.'%')
    //     ->orWhere('description', 'like', '%'.$name.'%')
    //     ->orWhere('release_year', 'like', '%'.$name.'%')
    //     ->get();
    // }
}
