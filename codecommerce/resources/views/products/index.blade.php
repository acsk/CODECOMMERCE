@extends('template.index')

@section('content')
<br>
<h1>Produto</h1>

<a href="{{route('products.create')}}" class="btn btn-default">New Product</a>

<br>
<br>

<div class="container">

    <div class="row">

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>

            </tr>
            @foreach($products as $prod)
            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->name}}</td>
                <td>{{$prod->description}}</td>
                <td>{{$prod->price}}</td>
                <td> {{$prod->category->name}}  </td>

                <td>
                    <a href="{{route('products.destroy',['id'=> $prod->id])}}">Delete</a> | 
                    <a href="{{route('products.edit',['id'=> $prod->id])}}">Edit</a> 

                </td>

            </tr>
            @endforeach
        </table>
        {!! $products->render() !!}
    </div>

</div>

@endsection

