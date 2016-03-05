<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
   public function salvar(Request $request){

    	$this->validate($request, [
    		'nome' => 'required|max:100',
    		'descricao' => 'required|max:200',
    		'quantidade' => 'required|numeric',
    		'valor' => 'required|numeric',
    		'id_fornecedor' => 'required|exists:suppliers,id'
    	]);

    	$product = new Product;
    	$product->nome = $request->nome;
    	$product->descricao = $request->descricao;
    	$product->valor = $request->valor;
    	$product->quantidade = $request->quantidade;
    	$product->id_fornecedor = $request->id_fornecedor;

    	$product->save();

    	
		$request->session()->flash('sucesso', 'sucesso');


    	return back();

    }

    public function mostrar(){

    	$products = Product::all();


    	return view('product.exibir', compact('products'));

    }

    public function editar(Product $product){

    	return view('product.editar', compact('product'));
    }

    public function alterar(Request $request, Product $product){

    	$product->update($request->all());

		$request->session()->flash('sucesso', 'sucesso');

    	return redirect()->route('mostrarprod', $product);

    }

    public function deletar(Product $product){

    	$product->delete();


    	return redirect()->route('mostrarprod');
    }


    public function cadastro(){

    	return view('product.cadastro');
    }

    public function index(){

    	return view('product.index');
    }
}
