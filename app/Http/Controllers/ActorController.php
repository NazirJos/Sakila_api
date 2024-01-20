<?php


namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    // get all records
    public function index(){
        return Actor::all();
    }

    //save new record
    public function store(Request $request){
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'last_update' => 'required'
        // ]);
        return Actor::create($request->all());
    }

    //get a single record
    public function show($id){
        return Actor::find($id);
    }

    // update a record
    public function update(Request $request, $id){
        $actor = Actor::find($id);
        $actor->update($request->all());
        return $actor;
    }

    // delete a record
    public function destroy($id) {
        return Actor::destroy($id);
    }

    // search
    public function search($name){
        return Actor::where('first_name', 'like', '%'.$name.'%')
                    ->orWhere('last_name', 'like', '%'.$name.'%')
                    ->get();
    }
}
