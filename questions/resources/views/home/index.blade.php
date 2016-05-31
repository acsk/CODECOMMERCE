
@extends('template.appHome')
@section('content')


 <div class="login-page">
            <div class="form">
                <form class="register-form">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Login</a></p>
                </form>
                
                <form class="login-form">
                    <input type="text" placeholder="username"/>
                    <input type="password" placeholder="password"/>
                    <button>login</button>
                    <p class="message">Não registrado? <a href="#">Criar uma conta.</a></p>
                </form>
            </div>
        </div>

@endsection