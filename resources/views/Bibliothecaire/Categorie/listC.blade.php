@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Liste des Categories</h2>
            </div>
          </header>
        <div class="col-md-12 mt-5">
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
                              <th>ID</th>
                              <th>Nom</th>
                              <th>Photo</th>
                              <th>Modifier</th>
                              <th>Supprimer</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($categories as $categorie)
                            <tr>
                              <td>{{$categorie['id']}}</td>
                              <td>{{$categorie['nomCategorie']}}</td>
                              <td><img src="{{asset('images')}}/{{$categorie->photo}}" style="max-width:70px;"/></td>
                              <td><a href={{"updateCategorie/".$categorie['id']}}><button class="btn btn-primary">Modifier</button></a></td>
                              <td><a href={{"deleteCategorie/".$categorie['id']}}><button class="btn btn-danger">Supprimer</button></a></td>
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