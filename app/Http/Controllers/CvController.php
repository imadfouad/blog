<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cv;
use Auth;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\cvRequest;

class CvController extends Controller
{

    public function __construct(){
         $this->middleware('auth');
    }

	//Lister les cvs
    public function index(){
        if(Auth::user()->is_admin){
            $listcv = Cv::all();
        }
        else{
          $listcv = Auth::user()->cvs;  
        }
    
       return view('cv.index',['cvs' => $listcv]);
    }
    //Affiche le formulaire de creation de cv
    public function create(){
        return view('cv.create');
    }

    //Enregistrer un cv (persistence)
    public function store(cvRequest $request){
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');

        $cv->user_id = Auth::user()->id;

        if($request->hasFile('photo')){
           $cv->photo =  $request->photo->store('image');   //retourne le nom de image uploadé
        }

        $cv->save();

        session()->flash('success','Le cv est bien enregistré !');

        return redirect('cvs');
    }

    //permet de récuperer un cv et le mettre dans un formulaire
    public function edit($id){
        $cv = Cv::find($id);

        $this->authorize('update',$cv) ;         //policy bach maybanch lien 

        return view('cv.edit',['cv' => $cv]);
    }

    //permet de modifier un cv (persistence)
    public function update(cvRequest $request ,  $id){
        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');

        if($request->hasFile('photo')){
           $cv->photo =  $request->photo->store('image');   //retourne le nom de image uploadé
        }

        $cv->save();

        return redirect('cvs');
    }

    public function show($id)
    {
        return view('cv.show',['id' => $id]);
    }
    
    //permet de supprimer un cv
    public function destroy( Request $request , $id){
        $cv = Cv::find($id);
        $cv->delete();
        return redirect('cvs');
    }



}
