@extends('layouts/layout')
@section('Menu')

<div class="content-inner">
<!-- Page Heading -->
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Listes des Documents (Nom cathegorie) </h2>
            </div>
          </header>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Nom document</th>
                    <th>Auteur</th>
                    <th>Document</th>
                    <th>Date Edition</th>
                    <th>Ouvrir document</th>
                    <th>Ajouter Etagere</th>
             
                    </tr>
                </thead>
                
                <tbody>
                      @foreach($documents as $document)
                    <tr>
                        <td>{{$document['nomDocument']}}</td>
                        <td>{{$document['auteur']}}</td>
                        <td><a href="#">{{$document['fichierDocument']}}</a> </td>
                        <td>{{$document['dateEdition']}}</td>
                        <td><a href={{"lireDocument/".$document['id']}}><button class="btn btn-primary" >Ouvrir</button></a></td>
                        <td><a href="etagere"><button class="btn btn-dark" >Ajouter Etagere</button></a></td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Groupe ISI &copy; 2020-2021</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Defar by <a href="#" class="external">iKEUR</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
    </footer>
 
@endsection