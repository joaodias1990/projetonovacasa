<?php

namespace App\Http\Controllers;

use App\Marcacao;
use Illuminate\Http\Request;

class MarcacaoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

   public function index() {
   	$marcacoes = Marcacao::all();
   	return view('marcacoes.index', [
   		'marcacoes' => $marcacoes
   	]);
   }

    public function show($id) {
   	$marcacao = Marcacao::find($id);
   	return view('marcacoes.show', [
   		'marcacao' => $marcacao
   	]);
   }
	
	public function create() {
   	return view('marcacoes.create');
   }

	public function store(Request $request) {
 		$marcacao = new Marcacao();
 		$marcacao->cliente = $request->get('nome');
 		$marcacao->telefone = $request->get('telefone');
 		$marcacao->entrega = $request->get('local');
 		$marcacao->hora_data = $request->get('hora');
 		$marcacao->quantidade = $request->get('quantidade');
 		$marcacao->notas = $request->get('observacoes');
 		$marcacao->save();
 		return redirect()->route('menu');
   }
}


