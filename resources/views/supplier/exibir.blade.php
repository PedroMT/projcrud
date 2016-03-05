@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Lista de Fornecedores</h2></div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">
                            <ul class="list-group">
                            @foreach ($suppliers as $supplier)

                                <li class="list-group-item">
                                <b> Nome: </b>{{ $supplier->nome }}
                                <br>
                                <b> CNPJ: </b>{{ $supplier->cnpj }}
                                <br>
                                <b> Estado: </b>{{ $supplier->estado }}
                                <br>
                                <b> Email: </b>{{ $supplier->email }}
                                <br><br>
                                <div align="right">
                                    <a href="/suppliers/{{ $supplier->id }}/editar" style="float:left">Editar</a>
                                    <form method="POST" action="/suppliers/{{ $supplier->id }}/deletar" onsubmit="return confirm('Tem certeza que deseja deletar?');">
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
