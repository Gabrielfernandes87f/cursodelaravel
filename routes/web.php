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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

// aqui vc pediu pra ele acessar http://127.0.0.1:8000/login e mostrar /contato 
Route::get('/login', function () {
    return view('contato');
});

/*
// aqui nas rotas tem um função anônima, foi criada uma variavel nome e atribuida um valor
// em baixo retorna uma view com array [propriedade +(uma areo funcion aqui) valor] => ['nome' => $nome]
Route::get('/contato', function () {
    $saudacao = "Seja bem vindo";
    return view('contato', ['saudacao' => $saudacao]); // dentro do array posso mudar nome 
    // saudacao por qualquer nome. tipo title e na variavel html chamar title e resto do 
    // condigo saudacao que ele entende

});

*/

        // nessse condigo criamos a variavel whats mas atribuimos um nome pra ela = contato e em site ficou portifolio //
Route::get('/contato', function () {
    $saudacao = "seja bem vindo";
    $nome = "Gabriel";
    $idade = 33;
    $whats = "83 9 9632-152726";
    $site = "www.com";
    $usuarios = [
        "Gabriel",
        "Alan",
        "kaio"
    ];
    $arr = [1, 2, 3, 4, 5];
    return view('contato', ['arr' => $arr, 'usuarios' => $usuarios, 'saudacao' => $saudacao, 'nome' => $nome, 'idade' => $idade, 'contato' => $whats, 'portifolio' => $site,

    ]);

});