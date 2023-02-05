<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Categorie;
use App\Models\Document;

class CategorieController extends Controller
{
    //INSERTION DE CATEGORIES
     public function createCategorie(Request $req )
     {
         $req->validate([
             'nomCategorie'=>'required' ,
             'photo'=>'required'
         ]);

         $nomCategorie =$req->nomCategorie;
         $image =$req->file('photo');
         $imageName =time().'.'.$image->extension();
         $image->move(public_path('images'),$imageName);

         $categorie = new Categorie;
         $categorie->nomCategorie=$nomCategorie;
         $categorie->photo=$imageName;
         $categorie->save(); 
         return redirect('addC');
         //return $req->input();
     } 

   //LISTES DES CATEGORIES
   public function listeCategorie()
   {
      $data= Categorie::all();
      //return view ('Bibliothecaire/Categorie/listC',array('categories' => $data));
       return view ('Bibliothecaire/Categorie/listC',['categories'=>$data]);
       //return view('Bibliothecaire/Categorie/listC',compact('data'));
       //dd($data);
   }

   //LISTES DES CATEGORIES PAR LECTEUR
   public function listeCategorieLecteur()
   {
      $data= Categorie::all();
      //return view ('Bibliothecaire/Categorie/listC',array('categories' => $data));
       return view ('Lecteur/document',['categories'=>$data]);
       //return view('Bibliothecaire/Categorie/listC',compact('data'));
       //dd($data);
   }


   //SUPPRESSION DE CATEGORIE
   public function suppressionCategorie($id)
   {
       $data = Categorie::find($id);
       $data->delete();
       return redirect('listC');
   }

   //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE CATEGORIE
   public function chargementCategrie($id)
   {
       $categories= Categorie::find($id);
       //$data->update();
       return view ('Bibliothecaire/Categorie/updateCategorie',['categories'=>$categories]);
   }

   //MODIFICATION DE CATEGORIE
   public function modificationCategorie(Request $req)
   {
        $nomCategorie =$req->nomCategorie;
        $image =$req->file('photo');
        $imageName =time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

       $data =Categorie::find($req->id);
       $data->nomCategorie=$nomCategorie;
       $data->photo=$imageName;
       $data->save();
       return redirect('listC');
   }
}

