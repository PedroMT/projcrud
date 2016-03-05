<?php

namespace App\Http\Controllers;

use App\Supplier;

use Illuminate\Http\Request;

use App\Http\Requests;

class SupplierController extends Controller
{
    public function salvar(Request $request){

    	$this->validate($request, [
    		'nome' => 'required|max:100',
    		'cnpj' => 'required|max:20|unique:suppliers,cnpj',
    		'email' => 'required|email|unique:suppliers,email',
    		'estado' => 'required'
    	]);

    	$supplier = new Supplier;
    	$supplier->nome = $request->nome;
    	$supplier->cnpj = $request->cnpj;
    	$supplier->email = $request->email;
    	$supplier->estado = $request->estado;

    	$supplier->save();

    	
		$request->session()->flash('sucesso', 'sucesso');


    	return back();

    }

    public function mostrar(){

    	//$supplier = Supplier::find($id);
    	$suppliers = Supplier::all();


    	return view('supplier.exibir', compact('suppliers'));

    }

    public function editar(Supplier $supplier){

    	return view('supplier.editar', compact('supplier'));
    }

    public function alterar(Request $request, Supplier $supplier){

    	$supplier->update($request->all());

		$request->session()->flash('sucesso', 'sucesso');

    	return redirect()->route('mostrar', $supplier);

    }

    public function deletar(Supplier $supplier){

    	$supplier->delete();


    	return redirect()->route('mostrar');
    }


    public function cadastro(){

    	return view('supplier.cadastro');
    }

    public function index(){

    	return view('supplier.index');
    }

}
