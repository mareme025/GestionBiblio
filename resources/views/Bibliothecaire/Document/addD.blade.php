@extends('Bibliothecaire/layout')
@section('Menu')
        <div class="content-inner">
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Ajout Document</h2>
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
                      <form action="addD" method="POST" enctype="multipart/form-data"> 
                      @csrf
                        <div class="form-group">
                        <span style="color:red">@error('nomDocument'){{$message}}@enderror</span>
                          <label class="form-control-label">Titre Document  </label>
                          <input type="text" placeholder="Titre du document" name="nomDocument" class="form-control">
                        </div>
                        <div class="form-group">
                        <span style="color:red">@error('auteur'){{$message}}@enderror</span>
                          <label class="form-control-label">Auteur du document</label>
                          <input type="text" placeholder="nom complet de l'auteur" name="auteur" class="form-control">
                        </div>
                        <div class="form-group">
                        <span style="color:red">@error('fichierDocument'){{$message}}@enderror</span>
                            <label for="fileInput" class="form-control-label">Ajoutez le document</label>
                             <input id="fileInput" name="fichierDocument" type="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                        <span style="color:red">@error('dateEdition'){{$message}}@enderror</span>
                          <label class="form-control-label">Date d'edition </label>
                          <input type="date" placeholder="Date d'edition"  name="dateEdition" class="form-control">
                        </div>
                        <div class="form-group">
                        @error('categorie_id')
                              <div class="invalid-feeback">
                          {{ $errors->first('categorie_id') }}
                              </div>
                          @enderror
                          <label class="form-control-label">Categorie du document</label>
                          <select class="form-select form-control mb-3 form @error('entreprise_id') is-invalid @enderror" name="categorie_id">
                          <option>Choisir une categorie</option>
                          @foreach($categories as $categorie)
                              <option value="{{ $categorie->id }}">{{ $categorie->nomCategorie }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">       
                          <input type="submit"  value="Enregistrer" class="btn btn-primary">
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