<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    // get address
    public function index(){
        return Address::all();
    }

    //save new address record
    public function store(Request $request){
        // $request->validate([
        //     "address" => 'required',
        //     "city_id" => 'required',
        //     "phone" => 'required',
        //     "last_update" => 'required'
        // ]);
        return Address::create($request->all());
    }

    //get a single address
    public function show($id){
        return Address::find($id);
    }

    // update an address data
    public function update(Request $request, $id){
        $address = Address::find($id);
        $address->update($request->all());
        return $address;
    }

    // delete an address data
    public function destroy($id) {
        return Address::destroy($id);
    }

    // search for an address
    public function search($name){
        return Address::where('address', 'like', '%'.$name.'%')->get();
    }
}
