
@extends('template.app')

@section('content')
<h1>Bancas</h1>
<div class="panel">
<a class="btn btn-primary" href="{{ route('bancas.create') }}">Nova Banca</a>
</div>
<table class="table">

    <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Action</th>

    </tr>

    @forelse ($bancas as $banca)  
    <tr>
        <td>{{ $banca->id }}</td>
        <td>{{ $banca->nome }}</td>
        <td>{{ $banca->descricao }}</td>
       
       
        <td>
            <a class="btn btn-danger" href="{{ route('bancas.destroy',['id'=>$banca->id]) }}">Delete</a> 
            
            <a class="btn btn-primary" href="{{ route('bancas.edit',['id'=>$banca->id]) }}">Edit</a>
        
        </td>

    </tr>
    @empty
    <p>No data Found!</p>
    @endforelse
</table>








@endsection