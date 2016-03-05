@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Lista de Produtos</h2></div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">
                            <ul class="list-group">
                            @foreach ($products as $product)

                                <li class="list-group-item">
                                <b> Nome: </b>{{ $product->nome }}
                                <br>
                                <b> Descrição: </b>{{ $product->descricao }}
                                <br>
                                <b> Quantidade: </b>{{ $product->quantidade }}
                                <br>
                                <b> Valor (R$): </b>{{ $product->valor }}
                                <br>
                                <b> Fornecedor: </b>{{ $product->id_fornecedor }}
                                <br><br>
                                <div align="right">
                                    <a href="/products/{{ $product->id }}/editar" style="float:left">Editar</a>
                                    <form method="POST" action="/products/{{ $product->id }}/deletar" onsubmit="return confirm('Tem certeza que deseja deletar?');">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit">Deletar</button>
                                    </form>
                                </div>
                                </li>
                                
                                
                            @endforeach
                            </ul>

                            @if (count($errors))
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                </ul>
                            @endif
                            
                            @if(session('sucesso'))
                                <script>alert("Cadastro alterado com sucesso!")</script>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
