<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content text-center">
                  <div class="logo">
                    <h1>GROUPE ISI</h1>
                  </div>
                  <p>Bienvenue dans votre biliotheque Numerique<br><b>Inscription</b></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                 

                <form method="POST" action="{{ route('register') }}">
                        @csrf
                          <!--Debut
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                           -> Fin-->
                    <div class="form-group">
                      <input id="register-username" type="text" name="name"  data-msg="Please enter your username" class="input-material  @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Nom : </label>
                    </div>
                    
                    <!--Debut
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        -Fin-->
                        <div class="form-group">
                      <input id="register-username" type="email"   data-msg="Please enter your username" class="input-material  @error('Email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Email : </label>
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="Adresse"  data-msg="Please enter your username" class="input-material  @error('Adresse') is-invalid @enderror"  value="{{ old('Adresse') }}">
                                @error('Adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Votre Adresse de Residence : </label>
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="Telephone"  data-msg="Please enter your username" class="input-material  @error('Telephone') is-invalid @enderror" value="{{ old('Telephone') }}">
                                @error('Telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Votre Telphone : </label>
                    </div>
                    <div class="form-group">
                          <label class="form-control-label">Sexe</label>
                         
                            <select name="Sexe"  class="form-control ">
                          
                              <option>Masculin</option>
                              <option>Feminin</option>
                            
                            </select>
                          
                        </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="Classe"  data-msg="Please enter your username" class="input-material  @error('Classe') is-invalid @enderror" value="{{ old('Classe') }}" >
                                @error('Classe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Votre Classe</label>
                    </div>
                    <!--Debut
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    -Fin -->
                    <div class="form-group">
                      <input id="register-username" type="password" name="password"  data-msg="Please enter your username" class="input-material  @error('password') is-invalid @enderror"  required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Mot de passe : </label>
                    </div>

                        <!--Debut
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        -Fin -->
                        <div class="form-group">
                      <input id="register-username" type="password" name="password_confirmation" required autocomplete="new-password" data-msg="Please enter your username" class="input-material ">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                      <label for="register-username" class="label-material">Confimer Votre Mot de passe : </label>
                    </div>


                    <div class="form-group">
                      <button  type="submit"  class="btn btn-primary">Enregistre</button>
                    </div>




                   <!--Debut
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        -fin-->
                    </form>


                  <small>Vous avez deja un compte ? </small><a href="/home" class="signup">Se connecter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Defar by <a href="https://bootstrapious.com" class="external">iKEUR</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    
    <script src="js/front.js"></script>
  </body>
</html>
<!-- Main File
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>-->
