@extends('template.index')

@section('content')
<br>
<h1>Editando o produto:<b>{{$product->name}}</b></h1>



@if (count($errors) > 0)
<div class="alert alert-warning">
  
    <ul style="list-style: none">
        @foreach ($errors->all() as $error)

        <li>  {{ $error }}</li>

        @endforeach
    </ul>

</div>

@endif



{!! Form::open (['route'=> ['products.update', $product->id], 'method'=>'POST']) !!}

<div class="form-group">
    {!! Form::label('name','Name:')  !!}
    {!! Form::text('name',$product->name,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',$product->description,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price','Price:') !!}
    {!! Form::text('price',$product->price,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('featured','Featured:') !!}
    {!! Form::checkbox('featured',$product->featured,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('recommended','Recommended:') !!}
    {!! Form::checkbox('recommended',$product->recommended,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar',['class'=>'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}
<br>


@endsection

