<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{

    public function welcome(){
        return view("welcome");
    }

    public function addStudent(Request $req){

        $create = new students();

        $create->name = $req["n"];
        $create->age = $req["a"];
        $create->city = $req["c"];

        $create->save();

        return view("welcome");
    }

    public function read(){
        $rec = students::all();
        $details = compact('rec');
        return view("read")->with($details);
    }

    public function delete($id){
        $id_found = students::find($id);
        $id_found->delete();
        return back();
    }

    public function edit($id){
        $foundId = students::find($id);
        return view("edit", ['std_id' => $foundId]);
    }

    public function update($id, Request $req){
        $foundId = students::find($id);

        $foundId->name = $req["n"];
        $foundId->age = $req["a"];
        $foundId->city = $req["c"];

        $foundId->save();

        return redirect("read");
    }


    public function contact(){
        return view("contact");
    }

    public function services(){
        return view("services");
    }

}
