<?php

use App\Models\Servico;
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

Route::get('/', function () {
    $meuPrimeiroServico = new Servico;
    $meuPrimeiroServico->nome = "Luisa Ferreira";
    $meuPrimeiroServico->telefone= "+55 (11) 91037-2418";
    $meuPrimeiroServico->origem = "Celular";
    $meuPrimeiroServico->data = "10/02/2023";
    $meuPrimeiroServico->observacao = "Nenhuma.";
    $meuPrimeiroServico->save();


    return view('index');
});
