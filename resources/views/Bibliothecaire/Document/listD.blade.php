@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Liste des Documents</h2>
            </div>
          </header>
        <div class="col-lg-12 mt-5">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">  
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Nom du document</th>
                              <th>Auteur</th>
                              <th>Fichier</th>
                              <th>Date de Publication</th>
                              <th>Categorie</th>
                              <td>Modifier</td>
                              <td>Supprimer</td>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($documents as $document)
                            <tr>
                              <td>{{$document['nomDocument']}}</td>
                              <td>{{$document['auteur']}}</td>
                              <td><a href="#">{{$document['fichierDocument']}}</a> </td>
                              <td>{{$document['dateEdition']}}</td>
                              <td>{{$document->categorie->nomCategorie}}</td>

                              <td><a href={{"updateDocument/".$document['id']}}><button class="btn btn-primary">Modifier</button></a></td>
                              <td><a href={{"deleteDocument/".$document['id']}}><button class="btn btn-danger">Supprimer</button></a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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
        </div>
      </div>
    </div>
    </div>
@endsection