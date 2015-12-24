@extends('auth.templates.index')

@section('content')
<img class="profile-img" src="{{asset('assets/login/img/login-xxl.png')}}" alt="">                        


<form class="form-signin form" method="POST" class="form-group" action="/auth/login">
    <div class="alert alert-danger" role="alert" style="display: none">Login Inválido</div>
    <div class="alert alert-success" role="alert" style="display: none">Login Efetuado com Sucesso!</div>
    {!! csrf_field() !!}
    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" class="form-control" placeholder="Senha" id="password">
    <button class="btn btn-lg btn-primary btn-block btn-enviar" type="submit">
        Login</button>
    <label class="checkbox pull-left">
        <input type="checkbox" name="remember" value="remember-me">  Lembrar
    </label>
    <a href="#" class="pull-right need-help">Recuperar Senha</a><span class="clearfix"></span>
</form>
</div>

@endsection


@section('scripts')
<script>

    $(function () {

        jQuery('form.form').submit(function () {
        jQuery(".alert-success").hide();   
        jQuery(".alert-danger").hide();

            var dadosForm = jQuery(this).serialize();
            jQuery.ajax({
                url: "/auth/login",
                type: "POST",
                data: dadosForm,
                beforeSend: iniciaPreloader()

            }).done(function (data) {
                finalizaPreloader();
                if (data == "1") {
                    jQuery(".alert-success").show();
                    location.href = "/painel";
                } else {

                    jQuery(".alert-danger").show();
                    jQuery(".alert-danger").html(data);

                }

            }).fail(function () {
                finalizaPreloader();
                alert("Falha ao enviar os Dados!");
            });

            return false;
        });

    });

    function iniciaPreloader() {
        jQuery(".btn-enviar").attr("disable");

    }
    function finalizaPreloader() {

        jQuery(".btn-enviar").removeAttr("disable");
    }
</script>
@endsection