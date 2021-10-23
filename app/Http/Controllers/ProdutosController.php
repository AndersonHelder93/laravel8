<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto Salvo Com Sucesso!";
    }
    public function show(){
        $produtos = Produto::all();
        return view( 'produtos.todos',['produtos' => $produtos]);
    }
    public function destroy($id){
        $produto=Produto::findOrFail($id);
        $produto->delete();
        return "Produto Excluido Com Sucesso!";
    }
    public function edit($id){
        $produto=Produto::findOrFail($id);
        return view('produtos.editar',['produto' => $produto]);
    }
    public function update(Request $request,$id){
        $produto=Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto Atualizado com Sucesso!";
    }
}
