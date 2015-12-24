@extends('template.index')

@section('content')
<br>
<h1>Editando a categorias: <b>{{$category->name}}</b></h1>



@if (count($errors) > 0)
<div class="alert alert-warning">
    
    <ul style="list-style: none"> 
        @foreach ($errors->all() as $error)

        <li>  {{ $error }}</li>

        @endforeach
    </ul>

</div>

@endif



{!! Form::open (['route'=> ['categorias.update', $category->id], 'method'=>'POST']) !!}

<div class="form-group">
    {!! Form::label('name','Name:')  !!}
    {!! Form::text('name',$category->name,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',$category->description,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar',['class'=>'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}
<br>


@endsection

