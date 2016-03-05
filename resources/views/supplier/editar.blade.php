@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Alteração do Cadastro de Fornecedor</h2></div>
                <div class="panel-body">
                    Preencha abaixo os campos que deseja alterar.<br><br>
                    <div>

                        <form method="POST" action="/suppliers/{{ $supplier->id }}/alterar">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group">
                            
                            Nome:<input name="nome" type="text" class="form-control" value="{{ $supplier->nome }}">
                            <br>
                            CNPJ:<input name="cnpj" type="text" class="form-control" value="{{ $supplier->cnpj }}">
                            <br>
                            Estado:<input name="estado" type="text" class="form-control" value="{{ $supplier->estado }}">
                            <br>
                            Email:<input name="email" type="text" class="form-control" value="{{ $supplier->email }}">
                            <br>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Alterar Fornecedor</button>

                                <a href="/suppliers/mostrar" style="float:right">Voltar</a>
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