@extends('template.index')

@section('content')
<br>
<h1>Images of  {{$product->name}}</h1>


<a href="#" class="btn btn-default">New Image</a>
<br>
<br>

<div class="container">

    <div class="row">

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Extension</th>
                <th>Action</th>

            </tr>

            @foreach($product->images as $image)
                <tr>
                    <td>{{$image->id}}</td>
                    <td>
                        <img src="{{ url('uploads/'.$image->id.".".$image->extension) }}" width="80">
                    </td>
                    <td>{{$image->extension}}</td>
                    <td>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
           
        </table>

    </div>

</div>

@endsection
