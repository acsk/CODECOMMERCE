
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{$titulo or 'Login | Arcomar Informática'}}</title>

        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,900,800,700,600,500' rel='stylesheet' type='text/css'>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="{{asset('assets/login/login.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{asset('assets/site/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/site/js/jquery.cycle.all.js')}}" type="text/javascript"></script>

    </head>


    <body>
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title"></h1>
                    <div class="account-wall">
                        @yield('content')

                    </div>
                </div>
            </div>
            @yield('scripts')
    </body>
</html>

