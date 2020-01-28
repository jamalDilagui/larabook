<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use App\Profil;
use App\User;
use Auth;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $profils=Profil::where('user_id', Auth::user()->id);
        /* dd($profil); */
        return view('profils.profil',compact('profils'));
    }
    public function show(User $user)
    {
        return view('profils.show',compact('user'));
    }
    public function search(Request $request,User $user)
    {
       if($user->username == $request->username)
       {
            dd($user);
            return view('profils.show',compact('user'));
       }
    }
    public function create()
    {
        return view('profils.addProfil');
    }
    public function store(Request $request)
    {
         /* $data=$request->all();
       $data=array_add($data, 'user_id', Auth::user()->id);
       dd($data); */
        $profil = new Profil();
        $profil->titre = $request->titre;
        $profil->statut = $request->statut;
        if($request->hasFile('tof'))
        {
            $profil->tof = $request->tof->store('images','public');
            $image = Image::make(public_path("/storage/{$profil->tof}"))->fit(500,500);
            $image->save();
        }
        $profil->user_id = Auth::user()->id;
        $profil->url = $request->url;
        $profil->save();
        return redirect('/show/'.$profil->user->username);
       
    }
    public function edit($id,User $user)
    {
        $profils = Profil::find($id);
        /* dd($profils); */
        return view('profils.edit',compact('profils'));
    }
    public function update(Request $request,$id)
    {
       
        $profil = Profil::find($id);
        $profil->titre = $request->titre;
        $profil->statut = $request->statut;
        if($request->hasFile('tof'))
        {
            $profil->tof = $request->tof->store('images','public');
            $image = Image::make(public_path("/storage/{$profil->tof}"))->fit(500,500);
            $image->save();
        }
        
        $profil->url = $request->url;
        $profil->save();
       /*  dd($profil); */
        return redirect('/show/'.$profil->user->username);
    }
}
