<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poste;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use App\Profil;
use App\User;
use Auth;

class PosteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }
    public function show(User $user)
    {
        
    }
  
    public function create()
    {
        return view("postes/createPost");
    }
    public function store(Request $request)
    {
        $poste = new Poste();
        $poste->description = $request->description;
        if($request->hasFile('photo'))
        {
            $poste->image = $request->photo->store('images','public');
            $image = Image::make(public_path("/storage/{$poste->image}"))->fit(1000,1000);
            $image->save();
        }
        $poste->user_id = Auth::user()->id;
        $poste->save();
        return redirect('/show/'.Auth::user()->username);
       
    }
    public function edit($id,User $user)
    {
        
    }
    public function update(Request $request,$id)
    {
       
        
    }
}
