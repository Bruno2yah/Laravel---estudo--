<?php

use App\Models\Manutencao;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Ordem');
});

Route::post('/Registro', function () {
    return view('Registro');
});

Route::post('/cadastrar',function(Request $request){

        //criar informações vinculada ao Model para o banco de dados/
        Manutencao::create([
          'nome'=> $request -> nome,
    
          'cpf' =>$request -> cpf,
    
          'telefone'=> $request -> telefone,

          'modelo'=> $request -> modelo,

          'marca'=> $request -> marca,

          'defeito'=> $request -> defeito,

          'data'=> $request -> data
        ]);
    

        echo " Cadastrado com sucessso";
    });