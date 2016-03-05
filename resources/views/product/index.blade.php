@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Manutenção de Cadastro de Produtos</h2></div>
                <div class="panel-body">
                    Clique em Exibir Cadastros para navegar pelos produtos e alterá-los ou clique em Novo Cadastro para cadastrar um novo produto.<br><br>
                    <div>
                        <ul>

                            <li><a href="/products/mostrar">Exibir Produtos</a></li>

                            <li><a href="/products/cadastro">Novo Cadastro</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection