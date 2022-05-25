<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre',[\App\Http\Controllers\SobreNosController::class,'sobre'])->name('site.sobrenos');

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login',function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/usuarios',function(){return 'Usuario';})->name('app.usuarios');
    Route::get('/empresas',function(){return 'Empresas';})->name('app.empresas');
    Route::get('/obras',function(){return 'Obras';})->name('app.obras');
    Route::get('/negocios',function(){return 'Negocios';})->name('app.negocios');
    Route::get('/sistemas',function(){return 'Sistemas';})->name('app.sistemas');
    Route::get('/solicitacoes',function(){return 'Solicitacoes';})->name('app.solicitacoes');
    Route::get('/patrimonios',function(){return 'Patrimonios';})->name('app.patrimonios');



});

Route::get('/rota1',function(){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2',function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function(){
    echo 'A pagina ñ existe ou esta em manutenção.<a href="/"> Clique aqui </a> para voltar a pagina inicial.';
});













/*
Route::get('/', function () {
    return 'Sistema de gestão administrativo!';
});
*/
/*
Route::get('/sobrenos', function () {
    return 'Sistema gmt da grafico!';
});

Route::get('/contato', function () {
    return 'Marcus Alves (71)99281-5460';
});
*/
