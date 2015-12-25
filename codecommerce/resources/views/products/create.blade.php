@extends('template.index')

@section('content')
<br>
<h1>Novo Produto</h1>



@if (count($errors) > 0)
<div class="alert alert-warning">
  
    <ul style="list-style: none">
        @foreach ($errors->all() as $error)

        <li>  {{ $error }}</li>

        @endforeach
    </ul>

</div>

@endif



{!! Form::open(['route'=>'products.store']) !!}

<div class="form-group">
    {!! Form::label('name','Name:')  !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price','Price:') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('featured','Featured:') !!}
    {!! Form::checkbox('featured',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('recommended','Recommended:') !!}
    {!! Form::checkbox('recommended',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar',['class'=>'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}
<br>


@endsection

