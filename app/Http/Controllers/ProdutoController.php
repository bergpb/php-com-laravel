<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Support\Facades\Request;
use estoque\Http\Requests\ProdutosFormRequest;


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

    public function adiciona(ProdutosFormRequest $request) {
        Produto::create($request->all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function edita($id) {
        $produto = Produto::find($id);

        return view('produto.edita')->withProduto($produto);
    }

    public function atualiza(ProdutosFormRequest $request, $id){
        $produto = Produto::find($id)->update($request->all());

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