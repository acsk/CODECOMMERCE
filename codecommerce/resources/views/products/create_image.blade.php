@extends('template.index')

@section('content')
<br>
<h1>Upload Image</h1>



@if (count($errors) > 0)
<div class="alert alert-warning">
  
    <ul style="list-style: none">
        @foreach ($errors->all() as $error)

        <li>  {{ $error }}</li>

        @endforeach
    </ul>

</div>

@endif



{!! Form::open(['route'=>['products.images.store', $product->id],'method' => 'post','enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {!! Form::label('image','Image:')  !!}
    {!! Form::file('image',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Enviar',['class'=>'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}
<br>


@endsection

