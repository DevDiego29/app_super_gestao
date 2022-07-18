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

// Rotas públicas:

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobreNos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobreNos');

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'salvar'])->name('site.contato');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

// Rotas privadas/restritas:

Route::prefix('/app')->group(function() {

    Route::get('/clientes', function(){return 'Clientes'; })->name('app.clientes');

    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class,'fornecedores'])->name('app.fornecedores');

    Route::get('/produtos', function(){return 'produtos'; })->name('app.produtos');
});

/**Redirecionamento de rotas:

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');**/

//outra maneira de redirecionar rotas - Route:redirect('/rota2', '/rota1');

Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class,'teste'])->name('teste');

//Rota de fallback

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir a página inicial';
});


