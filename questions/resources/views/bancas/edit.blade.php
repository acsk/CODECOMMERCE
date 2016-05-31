
@extends('template.app')

@section('content')
<h1>Edit Bancas -> {{ $banca->descricao}}</h1>
@if ($errors->any())
<div class="alert alert-danger">
    
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    
    @endforeach
</div>
@endif


{!! Form::open(['route' =>['bancas.update',$banca->id],'method'=>'POST']) !!}


<div class="form-group">
    {!!Form::label('nome','Nome:') !!}
    {!!Form::Text('nome',$banca->nome,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('descricao','Descricão') !!}
    {!!Form::Text('descricao',$banca->descricao,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    
    {!! Form::submit('Salvar',['class'=>'btn btn-primary form-control']) !!}

</div>
{!! Form::close() !!}




@endsection