


@extends('template.app')


@section('content')




<h1>Create Provas</h1>
@if ($errors->any())
<div class="alert alert-danger">

    @foreach($errors->all() as $error)
    <p>{{$error}}</p>

    @endforeach
</div>
@endif




{!! Form::open(['route' =>'provas']) !!}

<div class="form-group">
    {!!Form::label('banca_id','Banca:') !!}
    {!!Form::select('banca_id',$bancas,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('orgao_id','Orgãos:') !!}
    {!!Form::select('orgao_id',$orgaos,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('cargo_id','Cargos:') !!}
    {!!Form::select('cargo_id',$cargos,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('ano_id','Ano:') !!}
    {!!Form::select('ano_id',$anos,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('nivel_id','Nivel:') !!}
    {!!Form::select('nivel_id',$nivels,null,['class'=>'form-control']) !!}
</div>


<div class="form-group">

    {!! Form::submit('Add Banca',['class'=>'btn btn-primary form-control']) !!}

</div>
{!! Form::close() !!}



@endsection

