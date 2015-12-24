@extends('template.index')

@section('content')
<br>
<h1>Produtos</h1>

<a href="#" class="btn btn-default">New Product</a>
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
                <th>Action</th>

            </tr>
            @foreach($products as $prod)
            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->name}}</td>
                <td>{{$prod->description}}</td>
                <td>{{$prod->price}}</td>

                <td>


                </td>

            </tr>
            @endforeach
        </table>

    </div>

</div>

@endsection

