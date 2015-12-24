@extends('template.index')

@section('content')
<br>
<h1>Categorias</h1>



@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)

        <li>  {{ $error }}</li>

        @endforeach
    </ul>

</div>

@endif



{!! Form::open(['route'=>'categorias.store']) !!}

<div class="form-group">
    {!! Form::label('name','Name:')  !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar',['class'=>'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}
<br>


@endsection

