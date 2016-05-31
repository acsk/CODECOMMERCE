
@extends('template.app')

@section('content')
<div class="page-header">
  <h1>Provas<small> concursos, enem, oab etc...</small></h1>
</div>


<div class="panel">

    <a class="label btn-primary" href="{{ route('provas.create')}}">Nova Prova</a>


</div>



<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Lista de provas cadastrada!</div>

  <!-- Table -->
  <table class="table">
    <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Banca</th>
        <th>Cargo</th>
        <th>Orgao</th>
        <th>Ano</th>
        <th>Nivel</th>
        <th>Action</th>

    </tr>

    @forelse ($provas as $prova)  
    <tr>
        <td>{{ $prova->id }}</td>
        <td>{{ $prova->prova_slug }}</td>
        <td>{{ $prova->banca->nome }}</td>
        <td>{{ $prova->cargo->nome }}</td>
        <td>{{ $prova->orgao->nome }}</td>
        <td>{{ $prova->ano->ano }}</td>
        <td>{{ $prova->nivel->nome }}</td>




        <td>
            <a class="label label-danger" href="{{route('provas.destroy',$prova->id)}}">Delete</a> 

            <a class="label label-primary" href="">Edit</a>
            
            <a class="label label-success" href="{{route('questoes.create',$prova->id)}}">Questões</a> 

        </td>

    </tr>
    @empty
    <p>No data Found!</p>
    @endforelse
  </table>
</div>




@endsection