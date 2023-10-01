<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\GroupeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Middleware\Auth;


/****** ROUTE LIBRE ACCES */
/*****************
 * ACCUEIL
 */
Route::get('/', [AccueilController::class, 'index'])
    ->name('accueil');

/*****************
 * FORFAIT
 */
Route::get('/forfaits', [ForfaitController::class, 'index'])
    ->name('forfaits');
/*****************
 *  GROUPES
 */
Route::get('/groupes', [GroupeController::class, 'index'])
    ->name('groupes');

    /*****************
 * CONTACT
 */
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

/*****************
 * HORAIRE
 */
Route::get('/horaire', [HoraireController::class, 'index']) // Assurez-vous que le nom du contrôleur est correct
    ->name('horaire');

/******
 * CONNEXION ET ENREGISTREMENT
 */

Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create')
    ->middleware("guest");

Route::post("/connexion", [ConnexionController::class, 'authentifier'])
    ->name('connexion.authentifier');

Route::get("/deconnexion", [ConnexionController::class, 'deconnecter'])
    ->name('deconnexion');

Route::get("/enregistrement", [EnregistrementController::class, 'create'])
    ->name('enregistrement.create');

Route::post("/enregistrement", [EnregistrementController::class, 'store'])
    ->name('enregistrement.store');


/******
 * RESERVATION CLIENT / SUPPRESSION
 */
Route::get('/client', [ClientController::class, 'create'])
    ->name('client.create')
    ->middleware("client");

Route::post('/client', [ClientController::class, 'store'])
    ->name('client.store')
    ->middleware("client");

Route::get('/reservation/{id}', [ClientController::class, 'destroy'])
    ->name('reservation.destroy')
    ->middleware("client");


/*****************
 * Admin
 */
Route::get('/admin', [AdminController::class, 'index'])
 ->name('admin.index')
 ->middleware("admin");

 Route::get('/admin/employe', [AdminController::class, 'create'])
 ->name('admin.create')
 ->middleware("admin");

 Route::get('/admin/client', [AdminController::class, 'ajout'])
 ->name('admin.ajout')
 ->middleware("admin");


 Route::get('/admin/forfait', [AdminController::class, 'forfait'])
 ->name('admin.forfait')
 ->middleware("admin");


 Route::get('/admin/groupe', [AdminController::class, 'groupe'])
 ->name('admin.groupe')
 ->middleware("admin");

Route::post("/admin", [AdminController::class, 'store'])
 ->name('admin.store')
 ->middleware("admin");

Route::get('/admin/user/{id}/edit', [AdminController::class, 'edit'])
 ->name('admin.edit')
 ->middleware("admin");

 Route::get('/admin/groupe/{id}/edit', [AdminController::class, 'editGroupe'])
 ->name('admin.editGroupe')
 ->middleware("admin");

 Route::put('/admin/groupe/{id}', [AdminController::class, 'updateGroupe'])
 ->name('admin.updateGroupe')
 ->middleware("admin");

Route::put('/admin/user/{id}', [AdminController::class, 'update'])
 ->name('admin.update')
 ->middleware("admin");

Route::get('/admin/user/{id}', [AdminController::class, 'destroy'])
    ->name('admin.destroy')
    ->middleware("admin");

Route::get('/admin/destroyForfaitUser/{forfait_id}/{user_id}', [AdminController::class, 'destroyForfaitUser'])
    ->name('admin.destroyForfaitUser');




/*****************
 * Employe
 */

 Route::get('/employee', [EmployeeController::class, 'index'])
 ->name('employee.index')
 ->middleware("employee");
