
@extends('template.app')

@section('content')

@is('admin')

<h1>Create Bancas</h1>
@if ($errors->any())
<div class="alert alert-danger">
    
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    
    @endforeach
</div>
@endif



{!! Form::open(['route' =>'bancas']) !!}

<div class="form-group">
    {!!Form::label('nome','Nome:') !!}
    {!!Form::Text('nome',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('descricao','Descricão') !!}
    {!!Form::Text('descricao',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    
    {!! Form::submit('Add Banca',['class'=>'btn btn-primary form-control']) !!}

</div>
{!! Form::close() !!}



@else
<div class="alert alert-warning"> Acesso Negado </div>
@endis


@endsection


