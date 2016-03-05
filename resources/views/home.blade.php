@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Início</h2></div>
                <div class="panel-body">
                    <h3> Bem-vindo ao menu principal.</h3><br>
                    Selecione um dos cadastros abaixo para efetuar a manutenção.
                    <br><br>
                    <div>
                        <ul>

                            <li><a href="/products/">Produtos</a></li>

                            <li><a href="/suppliers/">Fornecedores</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
