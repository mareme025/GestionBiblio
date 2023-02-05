<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Categorie;

class DocumentController extends Controller
{

    public function getCategorie()
    {
        $categories = Categorie::all();
        return view('Bibliothecaire/Document/addD', compact('categories'));
    }

    public function getCategorieMod()
    {
        $categories = Categorie::all();
        return view('Bibliothecaire/Document/updateDocument', compact('categories'));
    }

        //INSERTION DE DOCUMENTS
    public function createDocument(Request $req)
    {
        $req->validate([
            'nomDocument'=>'required' ,
            'auteur'=>'required' ,
            'fichierDocument'=>'required' ,
            'dateEdition'=>'required',
            'categorie_id'=>'required'
        ]);
        $document = new Document();

        $file= $req->file('fichierDocument');
        $filename =time().'.'.$file->getClientOriginalName();
       // $filename =time().'.'.$file->extension();
        $file->move(public_path('documents'),$filename);
        $document->fichierDocument=$filename;

        $document->nomDocument=$req->nomDocument;
        $document->auteur=$req->auteur;
        $document->dateEdition=$req->dateEdition;
        $document->categorie_id=$req->categorie_id;
        $document->save(); 
        return redirect('addD');

    }
    public function store()
    {
        
    }

    //LISTES DES DOCUMENTS
   public function listeDocument()
   {
      $data= Document::all();
       return view ('Bibliothecaire/Document/listD',['documents'=>$data]);
   }

   //LISTES DES DOCUMENTS Lecteur
   public function listeDocumentLecteur()
   {
      $documents= Document::all();
      $categories = Categorie::get();
      if(\request('categorie'))
      {
        $documents = Document::where('categorie_id', request('categorie'))->get();
        return view ('Lecteur/Livre', compact('documents', 'categories'));
      }
      return view ('Lecteur/Livre', compact('documents', 'categories'));   }

   //SUPPRESSION DE DOCUMENTS
   public function suppressionDocument($id)
   {
       $data = Document::find($id);
       $data->delete();
       return redirect('listD');
   }

   //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE DOCUMENTS
   public function chargementDocument($id)
   {
        $categories = Categorie::all();
       $documents= Document::find($id);
       return view ('Bibliothecaire/Document/updateDocument',compact('documents', 'categories'));
   }

   //MODIFICATION DE DOCUMENTS
   public function modificationDocument(Request $req)
   {
        $categories = Categorie::all();
       $data =Document::find($req->id);
       $data->nomDocument=$req->nomDocument;
       $data->auteur=$req->auteur;
       $data->fichierDocument=$req->fichierDocument;
       $data->dateEdition=$req->dateEdition;
       $data->categorie_id=$req->categorie_id;
       $data->save();
       return redirect('listD');
   }

   //OUVERTURE ET LECTURE DE DOCUMENT 
   public function ouvrirDocument($id)
   {
        $document =Document::find($id);
        return view('Lecteur/lireDocument',compact('document'));
   }
}
