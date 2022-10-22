<?php

namespace App\Http\Controllers;

use App\Models\matieres;
use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PrincipaleController extends Controller
{
        // public function index(Request $request)
        // {

        //       $tmp_fichiers = tmp_fichiers::with('matieres.filieres.departements')->where('valider', 1)->orderby('created_at', 'desc')->paginate(15);
        //       return view('dashboard', compact('tmp_fichiers'));
        // }

        public function index(Request $request)
        {
                if(strtolower($request->departement))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                               ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                               ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                               ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                               ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                               ->where('departements.nom', strtolower($request->departement))
                               ->where('valider', 1)
                               ->paginate(15);
                        //        dd($tmp_fichiers);
                               return view('dashboard', compact('tmp_fichiers'));
                               
                }
                if(strtolower($request->departement))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('filieres.intitule', strtolower($request->departement))
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('dashboard', compact('tmp_fichiers'));
                }
                if(strtolower($request->matieres))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.nom_matiere', strtolower($request->matieres))
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('dashboard', compact('tmp_fichiers'));
                }
                if(strtolower($request->niveaux))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.niveau_matiere', strtolower($request->niveaux))
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('dashboard', compact('tmp_fichiers')); 
                }
                if(strtolower($request->semestres))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.semestres', strtolower($request->semestres))
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('dashboard', compact('tmp_fichiers')); 
                }
                // if($request->departement && $request->filieres && $request->matieres && $request->niveaux && $request->semestres)
                // {
                //          $tmp_fichiers = DB::table('tmp_fichiers')
                //          ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                //          ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                //          ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                //          ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                //          ->where('valider', 1)
                //          ->where('departements.nom', $request->departement)
                //          ->where('filieres.intitule', $request->filieres)
                //          ->where('matieres.nom_matiere', $request->matieres)
                //          ->where('matieres.niveau_matiere', $request->niveaux)
                //          ->where('matieres.semestres', $request->semestres)
                //          ->get();
                //          dd($tmp_fichiers);
                //          return view('search', compact('tmp_fichiers'));     
                // }
                        
                // $tmp_fichiers = tmp_fichiers::with('matieres.filieres.departements')->where('valider', 1)->orderby('created_at', 'desc')->paginate(15);
                $tmp_fichiers = DB::table('tmp_fichiers')
                ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                ->where('valider', 1)
                ->orderBy('tmp_fichiers.created_at', 'desc')
                ->paginate(15);
                return view('dashboard', compact('tmp_fichiers'));
        }

}
