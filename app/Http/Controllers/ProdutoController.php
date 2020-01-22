<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
    public function lista() {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($produto)) {
            return "Produto não existe.";
        }
        return view('produto.detalhes')->withProduto($produto[0]);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos(nome, quantidade, valor, descricao) values(?,?,?,?)',
            array($nome, $valor, $descricao, $quantidade));

        return redirect()->route('lista-produtos')->withInput(Request::only('nome'));
    }

    public function listaJson() {
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }
}