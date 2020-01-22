<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

class ProdutoController extends Controller {
    public function lista() {
        $produtos = Produto::all();
        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Produto não existe.";
        }
        return view('produto.detalhes')->withProduto($produto);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {
        Produto::create(Request::all());
        $produto->save();

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function listaJson() {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id) {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }
}