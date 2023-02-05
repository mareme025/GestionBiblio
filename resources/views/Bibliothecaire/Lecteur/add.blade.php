@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Ajout Lecteur</h2>
            </div>
          </header>
        <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p>Veuillez remplir ces informations </p>
                      <form method="post" action="ajoutL"> 
                      @csrf
                        <div class="form-group">
                          <label class="form-control-label">Nom : </label>
                          <input type="text" name="Nom" placeholder="Nom Lecteur" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Prenom : </label>
                          <input type="text"  name="Prenom" placeholder="Prenom Lecteur" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Adresse : </label>
                          <input type="text" name="Adresse" placeholder="Adresse Lecteur" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Telephone : </label>
                          <input type="text" name="Telephone" placeholder="Telephone Lecteur" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Email: </label>
                          <input type="email" name="Email" placeholder="Email Lecteur" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Mot de passe: </label>
                          <input type="password" name="MotPasse" placeholder="Mot de passe Lecteur" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Sexe</label>
                         
                            <select name="Sexe" class="form-control mb-3">
                          
                              <option>Masculin</option>
                              <option>Feminin</option>
                            
                            </select>
                          
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Classe</label>
                          <input type="text"  name="Classe" placeholder="Classe Lecteur" class="form-control">
                        </div>
                        <div class="form-group">       
                          <input type="submit" value="Enregistre" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </section>
              
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