@extends('layouts/layout')
@section('Menu')

<div class="content-inner">
<!-- Page Heading -->
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Categories </h2>
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
                    <th>Nom Categorie</th>
                    <th>Nombre de Livres </th>
                    <th>Action </th>                        
                    </tr>
                </thead>
                <tbody>
                          @foreach($categories as $categorie)
                            <tr>
                              <td width="500px;">{{$categorie['nomCategorie']}}&nbsp;&nbsp;&nbsp;<img src="{{asset('images')}}/{{$categorie->photo}}" style="max-width:70px;"/></td>
                              <td width="100px;"></td>
                              <td width="100px;"><a href="Livre?categorie={{$categorie->id }}"><button class="btn btn-primary">Consulter</button></a></td>
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
@endsection