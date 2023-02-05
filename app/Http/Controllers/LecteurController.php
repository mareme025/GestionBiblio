<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecteur;
use App\User;
use Illuminate\Support\Facades\Hash;
class LecteurController extends Controller
{
   public  function createLecteur(Request $req){
              $req->etat=0; 
            //ajout d'un user
               $user= new User;
               $user->Nom=$req->Nom;
               $user->Adresse=$req->Adresse;
               $user->Telephone=$req->Telephone;
               $user->Email=$req->Email;
               $user->MotPasse=Hash::make($req->MotPasse);
               $user->Sexe=$req->Sexe;
               $user->Classe=$req->Classe;
               //$user->CarteEtudiant=$req->CarteEtudiant;
              $user->etat=$req->etat;
               $user->save();
                return redirect('form'); //redirection dans la page ajout Lecteur


   } 

     //LISTES DES LECTEURS
     public function listeLecteur()
     {
        $data= User::all();
         //return view ('Bibliothecaire/Lecteur/listL',['users'=>$data]);
         return view('Bibliothecaire/Lecteur/listL',compact('data'));

     }

      //SUPPRESSION DE DOCUMENTS
   public function suppressionLecteur($id)
   {
       $data = Lecteur::find($id);
       $data->delete();
       return redirect('listL');
   }

   //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE DOCUMENTS
   public function chargementLecteur($id)
   {
      $data= Lecteur::find($id);
      //$data->update();
      return view ('Bibliothecaire/Lecteur/updateLecteur',['data'=>$data]);
   }

   //MODIFICATION DE DOCUMENTS
   public function modificationLecteur(Request $req)
   {
        $users = Lecteur::all();
       $data =Lecteur::find($req->id);
       $data->Nom=$req->Nom;
       $data->Prenom=$req->Prenom;
       $data->Adresse=$req->Adresse;
       $data->Telephone=$req->Telephone;
       $data->Email=$req->Email;
       $data->Sexe=$req->Sexe;
       $data->Classe=$req->Classe;
       $data->save();
       return redirect('listL');
   }
}
