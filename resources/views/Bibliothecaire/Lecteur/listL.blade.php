@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Liste des Lecteurs</h2>
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
                    <div class="card-header d-flex align-items-center">
                      
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">  
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Nom</th>
                              <th>Email</th>
                              <th>Classe</th>
                              
                              <th>Telephone</th>
                              <th>Sexe</th>
                              <th>Adresse</th>
                              <th>Modifier</th>
                              <th>Supprimer</th>
                              <th>Bloquer</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($data as $lecteur)
                            <tr>
                              <td>{{$lecteur['name']}}</td>
                              <td>{{$lecteur['email']}}</td>
                              <td>{{$lecteur['Classe']}}</td>
                              <td>{{$lecteur['Telephone']}}</td>
                              <td>{{$lecteur['Sexe']}}</td>
                              <td>{{$lecteur['Adresse']}}</td>

                              <td><a href={{"updateLecteur/".$lecteur['id']}}><button class="btn btn-primary">Modifier</button></a></td>
                              <td><a href={{"deleteLecteur/".$lecteur['id']}}><button class="btn btn-danger">Supprimer</button></a></td>
                              <td><a href={{"bloquerLecteur/".$lecteur['id']}}><button class="btn btn-dark">Bloquer</button></a></td>
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