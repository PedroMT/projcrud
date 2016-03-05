@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Alteração do Cadastro de Produto</h2></div>
                <div class="panel-body">
                    Preencha abaixo os campos que deseja alterar.<br><br>
                    <div>

                        <form method="POST" action="/products/{{ $product->id }}/alterar">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group">
                            
                            Nome:<input name="nome" type="text" class="form-control" value="{{ $product->nome }}">
                            <br>
                            Descrição:<input name="descricao" type="text" class="form-control" value="{{ $product->descricao }}">
                            <br>
                            Quantidade:<input name="quantidade" type="number" class="form-control" value="{{ $product->quantidade }}">
                            <br>
                            Valor:<input name="valor" type="text" class="form-control" value="{{ $product->valor }}">
                            <br>
                            Fornecedor:<input name="id_fornecedor" type="text" class="form-control" value="{{ $product->id_fornecedor }}" disabled>
                            <br>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Alterar Fornecedor</button>

                                <a href="/products/mostrar" style="float:right">Voltar</a>
                            </div>
                        </form>

                        @if (count($errors))
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection