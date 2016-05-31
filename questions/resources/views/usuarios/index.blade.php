
@extends('template.app')

@section('content')
<h1>Usuários</h1>

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Novo Usuário
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastro de Usuários</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-success" role="alert" style="display: none"> </div>
                <div class="alert alert-danger"  role="alert" style="display: none"></div>


                <form method="POST" action="{{route('usuarios.store')}}" send="{{route('usuarios.store')}}" id="form">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        Name
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        Email
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        Password
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        Confirm Password
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    <input type="submit" class="btn btn-success" value="Registrar">
                </form>

            </div>
            <div class="preloader" style="display: none">Iniciando</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<br><br>


<table class="table">

    <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Action</th>


    </tr>

    @forelse ($usuarios as $usuario)  
    <tr>
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->email}}</td>

        <td>
            <a class="btn btn-danger" href="">Delete</a> 

            <a class="btn btn-primary" href="">Edit</a>

        </td>

    </tr>
    @empty
    <p>No data Found!</p>
    @endforelse
</table>


@endsection

@section('scripts')
<script>

    $(function () {
        jQuery("#form").submit(function () {
            var dadosForm = jQuery(this).serialize();
            // alert(dadosForm);
            jQuery(".preloader").hide();

            jQuery.ajax({
                url: jQuery(this).attr("send"),
                data: dadosForm,
                type: "POST",
                beforesend: iniciaPreloader()

            }).done(function (data) {
                finalizaPreloader();

                if (data == "1") {

                    jQuery(".alert-success").slideDown("slow");
                    jQuery(".alert-success").html(data);
                } else {
                    jQuery(".alert-danger").slideDown("slow");
                    jQuery(".alert-danger").html(data);
                }
            }).fail(function () {
                finalizaPreloader();
            });

            return false;
        });

    });

    function iniciaPreloader() {

        jQuery(".preloader").show();
    }
    function finalizaPreloader() {
        jQuery(".preloader").hide();

    }
</script>
@endsection