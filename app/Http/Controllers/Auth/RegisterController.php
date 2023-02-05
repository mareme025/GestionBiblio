<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Mailcontroller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*
   $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Prenom');
            $table->string('Adresse');
            $table->string('Telephone');     
            $table->string('Sexe');
            $table->string('Classe');
    */

    //Controller des champs 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Adresse' => ['required', 'string', 'max:255'],
            'Classe' => ['required', 'string', 'max:255'],
            'Sexe' => ['required', 'string', 'max:255'],
            'Telephone' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
  
/*
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'Adresse' => $data['Adresse'],
            'Telephone' => $data['Telephone'],
            'Classe' => $data['Classe'],
            'Sexe' => $data['Sexe'],
            'password' => Hash::make($data['password']),
            
        ]);
        return back();
    }

/*
    public  function CreateLecteur(Request $req){
      //ajout d'un User
         $user= new User;
         $user->name=$req->name;
         $user->Adresse=$req->Adresse;
         $user->Telephone=$req->Telephone;
         $user->email=$req->email;
         $user->Password=Hash::make($req->Password);
         $user->Sexe=$req->Sexe;
         $user->Classe=$req->Classe;
         //$user->CarteEtudiant=$req->CarteEtudiant;
         $user->save();
         //return redirect('form'); //redirection dans la page ajout User
          dd($user);


} 
*/
public function register(Request $request)
{
                $user = new User();
                $user->name=$request->name;
                $user->email=$request->email;
                $user->password=$request->password;
                $user->Sexe=$request->Sexe;
                $user->Classe=$request->Classe;
                $user->Adresse=$request->Adresse;
                $user->Telephone=$request->Telephone;
                $user->password=Hash::make($request->password);
                $user->verification_code=time();
                $user->save();
     if($user != null)
            {
            //envoyer des emails
                 Mailcontroller::sendSignupMail($user->name,$user->email,$user->verification_code);
                 return redirect ()->back()->with(session()->flash('alert-success','Votre compte a ete bien cree.veuillez utliser le mail pour verification'));
           //afficher le message 
            }
           //redir
                 return redirect()->back()->with(session()->flash('alert-danger','Echec !!!'));
    }
    public  function VerifyUser(Request $request){

                $verification_code=\Illuminate\Support\Facades\Request::get('code');
                $user=User::where(['verification_code'=>$verification_code])->first();
                if($user!=null){

                    $user->is_verified=1;
                    $user->save();
                     return redirect ()->route('login')->with(session()->flash('alert-success','Votre compte a ete bien Active'));

                }
                return redirect ()->route('login')->with(session()->flash('alert-success','Votre compte na  pas ete bien Active'));



    }
}
