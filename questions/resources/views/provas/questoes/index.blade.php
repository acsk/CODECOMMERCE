
@extends('template.app')

@section('content')

<h1>Questões</h1>

<table class="table table-striped">

    <th>ID</th>
    <th>Banca</th>
    <th>Orgao</th>
    <th>Cargo</th>
    <th>Nivel</th>
    <th>Ano</th>


    <tr>
        <td>{{ $provas->id }}</td>
        <td>{{ $provas->banca->nome }}</td>
        <td>{{ $provas->cargo->nome }}</td>
        <td>{{ $provas->orgao->nome }}</td>
        <td>{{ $provas->nivel->nome }}</td>
        <td>{{ $provas->ano->ano }}</td>
    </tr>    

</table>



</div>





@foreach($questoes as $questao)

<div class="container-fluid">
    <div class="col-sm-2">  </div>
    <div class="col-sm-10 bg-warning"><span class="title>"><h3> <b>Questão Nº </b>{{$questao->id}}</h3> <br> {{$questao->descricao}}</span></div>


    <div class="col-sm-2"></div>
    <div class="col-sm-10">

        <form class="form">
            <table class="table table-borderless">
                @foreach($alternativa as $alt)


                @if($alt->questao_id == $questao->id)


                <tr>
                    <td>
                        <div class="form-group">
                            <label class="control-label">{{$alt->sequencia}}</label>
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control"  value="{{$alt->descricao}}" >
                        </div>

                    </td>

                    <td>

                        <div class="form-group">
                            <input type="submit" class="btn-sm btn-danger" value="X">
                        </div>
                    </td>

                </tr>





                @endif

                @endforeach 
            </table>
            <div class="form-group">
                <input type="submit" class="btn-sm btn-success" value="Salvar">

                <input type="submit" class="btn-sm btn-info" value="Add Alternativa">
            </div>
        </form>


    </div>

</div>
<br>
@endforeach


@endsection