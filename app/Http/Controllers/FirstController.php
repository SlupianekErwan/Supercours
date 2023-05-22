<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    
    public function index() {

        $photos = Photo::all();

        return view("FirstController.index", ["photos" => $photos]);

    }

    public function create() {

        return view("create");

    }

    public function photos($id) {

        $photo = Photo::findOrFail($id);
        return view("photos", ["photo" => $photo]);

    }

    public function store(Request $request) {

        $request->validate([
          'title'=> 'required|max:30|min:3',
          'categorie'=> 'required|max:8|min:3',
          'niveau'=> 'required|max:8|min:3',
          'image'=>  'required|mimes:jpeg,png',
          'cours'=>  'required|mimes:pdf',
        ]);

        $nom = $request->file("image")->hashName();
        $request->file('image')->move("uploads/".Auth::id(), $nom);

        $cour = $request->file("cours")->hashName();
        $request->file('cours')->move("uploads/".Auth::id(), $cour);

        $p = new Photo();
        $p->title = $request->input('title');
        $p->category = $request->input('categorie');
        $p->level = $request->input('niveau');
        /*$p->url = $request->input('url');*/
        $p->url = "/uploads/".Auth::id()."/$nom";
        $p->lesson = "/uploads/".Auth::id()."/$cour";
        $p->user_id = Auth::id();
        $p-> save();

        return redirect("/");

    }

    public function users($id) {

        $user = User::findOrFail($id);
        return view("Firstcontroller.users", ["user"=> $user]);

    }

    public function follow($id) {

        Auth::user()->IFollow()->toggle($id);
        return back();
    }

}
