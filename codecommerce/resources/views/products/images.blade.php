@extends('template.index')

@section('content')
<br>
<h1>Images of  {{$imagens->image}} | {{$imagens->extension}} | {{$imagens->id}}</h1>



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
           
            <tr>
                <td>{{$imagens->id }}</td> 
                <td></td> 
                <td></td> 
                <td></td> 


                </td>

            </tr>
           
        </table>

    </div>

</div>

@endsection

