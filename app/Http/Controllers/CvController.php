<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cv;

class CvController extends Controller
{
    //lister les cvs
    public function index() {
        $listcv = Cv::all();

        return view('cv.index', ['cvs' => $listcv]);
    }
    //Affiche le formulaire de creation de cv 
    public function create() {
        return view('cv.create');
    }
    //Enregister un cv
    public function store(Request $request) {
        $cv = new Cv();

        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');

        $cv->save();
    }
    //Permet de récuperer un cv puis de le mettre dans le formulaire
    public function edit() {
        
    }
    //Permet de modifier un cv
    public function update() {
        
    }
    //Permet de supprimer un cv
    public function destroy() {
        
    }

}
