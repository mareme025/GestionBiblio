@extends('Lecteur/layout')
@section('Menu')
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tableau de Bord</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
 
                <div class="col-lg-12">
                  <div class="client card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body text-center">
                      <div class="client-avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                        <h3>Mareme Seck</h3><span>Master 2 MIAGE</span><a href="#">Modifier</a>
                      </div>
                      <div class="client-info">
                            <div class= "row">
                               <div class="col-md-6">
                         <div class="col-md-12 text-left"><strong>Email</strong> : Maremeseck95@gmail.com</div>
                         <div class="col-md-12 text-left"><strong>Adresse</strong> : Dakar Senegal</div>
                         </div>
                         
                        
                         <div class="col-md-6">
                         <div class="col-md-12 text-right"><strong>Telephone</strong> :+221 77 191 10 40</div>
                         <div class="col-md-12 text-right"><strong>Identifiant</strong> : Maremeseck95</div>
                        </div>
                         </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              </div>
           
          </section>


         
   <!-- Projects Section-->
          
         
          <!-- Page Footer-->
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
    <!-- JavaScript files-->
@endsection