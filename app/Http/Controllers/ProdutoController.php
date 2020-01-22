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
}