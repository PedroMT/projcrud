@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Cadastro de Fornecedor</h2></div>
                <div class="panel-body">
                    Preencha abaixo os campos necessários para efetuar o cadastro.<br><br>
                    <div>

                        <form method="POST" action="/suppliers/salvar">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}

                            <div class="form-group">

                            Nome:<input name="nome" type="text" class="form-control" value="{{ old('nome') }}">
                            <br>
                            CNPJ:<input name="cnpj" type="text" class="form-control" value="{{ old('cnpj') }}">
                            <br>
                            Estado:<input name="estado" type="text" class="form-control" value="{{ old('estado') }}">
                            <br>
                            Email:<input name="email" type="text" class="form-control" value="{{ old('email') }}">
                            <br>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Efetuar Cadastro</button>

                                <a href="/suppliers/" style="float:right">Voltar</a>
                            </div>
                        </form>

                        @if (count($errors))
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if(session('sucesso'))
                            <script>alert("Cadastro efetuado com sucesso!")</script>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection