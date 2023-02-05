<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecteurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/
//Route cote Lecteur 
Route::POST('ajoutLecteur',[RegisterController::class,'CreateLecteur'])->name('ajoutLecteur');
//Route::view('indexR','indexR');
Route:: view('index','Lecteur/index'); //Route vers Dashboard
Route:: view('layout','Lecteur/layout');//Route vers Menu principale
Route::view('etagere','Lecteur/etagere');
Route::view('profil','Lecteur/profil');
Route:: view('form','form'); 
Route:: view('index1','Lecteur/categ');
Route:: view('document','Lecteur/document');
Route:: view('Livre','Lecteur/Livre');
Route::POST('ajoutLecteur',[RegisterController::class,'CreateLecteur'])->name('ajoutLecteur');//Lien vers  le controller Lecteur
//Route cote Biliothecaire
Route:: view('layoutB','Bibliothecaire/layout');//Route vers Menu principale
Route:: view('indexB','Bibliothecaire/index');
Route:: view('ajoutL','Bibliothecaire/Lecteur/add');
Route:: view('listL','Bibliothecaire/Lecteur/listL');
Route:: view('addD','Bibliothecaire/Document/addD');
Route:: view('listD','Bibliothecaire/Document/listD');
Route:: view('addC','Bibliothecaire/categorie/addC');
Route:: view('listC','Bibliothecaire/categorie/listC');
Route:: view('updateCategorie','Bibliothecaire/Categorie/updateCategorie');
Route::view('profilB','Bibliothecaire/profilB');

//ROUTE CATEGORIE
Route::post("addC",[CategorieController::class,'createCategorie'])->name('createCategorie'); //AJOUT CATEGORIE
Route::get("listC",[CategorieController::class,'listeCategorie']);//LISTE CATEGORIE
Route::get("document",[CategorieController::class,'listeCategorieLecteur']);//LISTE CATEGORIE Lecteur
Route::get("deleteCategorie/{id}",[CategorieController::class,'suppressionCategorie']); //SUPPRESSION DE CATEGORIE
Route::get("updateCategorie/{id}",[CategorieController::class,'chargementCategrie']); //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE CATEGORIE
Route::post("updateCategorie",[CategorieController::class,'modificationCategorie']); //MODIFICATION DE CATEGORIE

//ROUTE DOCUMENT 
Route::post("addD",[DocumentController::class,'createDocument'])->name('createDocument'); //AJOUT DOCUMENT
Route::post("etagere",[DocumentController::class,'createDocumentEtegere'])->name('createDocumentEtegere'); //AJOUT DOCUMENT ETAGERE
Route::get("listD",[DocumentController::class,'listeDocument']);//LISTE DOCUMENT
Route::get("Livre",[DocumentController::class,'listeDocumentLecteur']);//LISTE DOCUMENT
Route::get("deleteDocument/{id}",[DocumentController::class,'suppressionDocument']); //SUPPRESSION DE DOCUMENT
Route::get("updateDocument/{id}",[DocumentController::class,'chargementDocument']); //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE DOCUMENT
Route::post("updateDocument",[DocumentController::class,'modificationDocument']); //MODIFICATION DE DOCUMENT
Route::get("addD",[DocumentController::class,'getCategorie']); //AFFICHAGE DES NOM DE CATEGORIE DANS L'AJOUT DE DOCUMENT
Route::get("updateDocument",[DocumentController::class,'getCategorieMod']);
Route::get("lireDocument/{id}",[DocumentController::class,'ouvrirDocument']); //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE DOCUMENT
Route::view('Retour','Lecteur/Livre');
//ROUTE LECTEUR
Route::post("ajoutL",[LecteurController::class,'createLecteur'])->name('createLecteur'); //AJOUT LECTEUR
Route::get("listL",[LecteurController::class,'listeLecteur']);//LISTE LECTEURS
Route::get("updateLecteur/{id}",[LecteurController::class,'chargementLecteur']); //CHARGEMENT DES DONNEES POUR LA MODIFICATION DE LECTEUR
Route::post("updateLecteur",[LecteurController::class,'modificationLecteur']); //MODIFICATION DE LECTEUR
Route::get("deleteLecteur/{id}",[LecteurController::class,'suppressionLecteur']); //SUPPRESSION DE LECTEUR

//ROUTES AUTHENTIFICATION
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::view('/login', 'auth/login');


//ROUTES VERIFICATION MAIL
Route::get('/verify',[App\Http\Controllers\Auth\RegisterController::class,'VerifyUser'])->name('verify');
