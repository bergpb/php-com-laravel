<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Support\Facades\Request;
use estoque\Http\Requests\ProductsFormRequest;


class ProductController extends Controller {

    public function list() {
        $produtos = Produto::all();

        return view('product.list')
            ->withProdutos($produtos);
    }

    public function show() {
        $id = Request::route('id');
        $produto = Produto::find($id);

        if(empty($produto)) {
            return "Produto não existe.";
        }

        return view('product.details')->withProduto($produto);
    }

    public function new() {
        return view('product.create');
    }

    public function add(ProductsFormRequest $request) {
        Produto::create($request->all());

        return redirect()
            ->route('list');
    }

    public function edit($id) {
        $produto = Produto::find($id);

        return view('product.edit')
            ->withProduto($produto);
    }

    public function update(ProductsFormRequest $request, $id){
        $produto = Produto::find($id)
            ->update($request->all());

        return redirect()
            ->route('list');
    }

    public function listJson() {
        $produtos = Produto::all();

        return response()->json($produtos);
    }

    public function remove($id) {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()
            ->route('list');
    }
}