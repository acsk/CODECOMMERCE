@extends('template.index')

@section('content')
<br>
<h1>Categorias</h1>

<a href="{{route('categorias.create')}}" class="btn btn-default">New Category</a>
<br>
<br>

<div class="container">

    <div class="row">

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>

            </tr>
            @foreach($categories as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->description}}</td>

                <td>
                    <a href="{{route('categorias.destroy',['id'=> $cat->id])}}">Delete</a> | 
                    <a href="{{route('categorias.edit',['id'=> $cat->id])}}">Edit</a> 
                    
                </td>

            </tr>
            @endforeach
        </table>
  {!! $categories->render() !!}
    </div>

</div>

@endsection

