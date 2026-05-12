<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    body{
        font-family:Arial, Helvetica, sans-serif;
        background:#020617;
    }

    .login-container{
        min-height:100vh;
        background:
        linear-gradient(rgba(0,0,0,0.78), rgba(0,0,0,0.78)),
        url('https://images.unsplash.com/photo-1517466787929-bc90951d0974');
        background-size:cover;
        background-position:center;
        display:flex;
        justify-content:center;
        align-items:center;
        padding:40px 20px;
    }

    .login-card{
        width:100%;
        max-width:560px;
        background:rgba(15,23,42,0.95);
        border-radius:30px;
        padding:60px;
        box-shadow:0 15px 45px rgba(0,0,0,0.55);
        backdrop-filter:blur(10px);
    }

    .title{
        text-align:center;
        color:#22c55e;
        font-size:58px;
        font-weight:bold;
        margin-bottom:12px;
        letter-spacing:3px;
    }

    .subtitle{
        text-align:center;
        color:#cbd5e1;
        font-size:21px;
        margin-bottom:50px;
    }

    .input-group{
        margin-bottom:30px;
    }

    .input-group label{
        display:block;
        margin-bottom:12px;
        color:#f1f5f9;
        font-size:17px;
        font-weight:500;
    }

    .input-custom{
        width:100%;
        padding:18px 20px;
        border-radius:16px;
        border:1px solid rgba(255,255,255,0.08);
        background:rgba(255,255,255,0.07);
        color:white;
        font-size:16px;
        outline:none;
        transition:0.3s;
    }

    .input-custom:focus{
        border:1px solid #22c55e;
        box-shadow:0 0 14px rgba(34,197,94,0.45);
    }

    .input-custom::placeholder{
        color:#94a3b8;
    }

    .remember{
        display:flex;
        align-items:center;
        gap:10px;
        margin-bottom:25px;
        color:#cbd5e1;
        font-size:15px;
    }

    .remember input{
        width:18px;
        height:18px;
        accent-color:#22c55e;
    }

    .login-btn{
        width:100%;
        background:#22c55e;
        color:white;
        border:none;
        padding:18px;
        border-radius:16px;
        font-size:19px;
        font-weight:bold;
        cursor:pointer;
        transition:0.3s;
        margin-top:10px;
        box-shadow:0 8px 22px rgba(34,197,94,0.35);
    }

    .login-btn:hover{
        background:#16a34a;
        transform:translateY(-2px);
    }

    .links{
        margin-top:28px;
        text-align:center;
    }

    .links a{
        color:#22c55e;
        text-decoration:none;
        font-size:15px;
        display:block;
        margin-top:10px;
    }

    .links a:hover{
        text-decoration:underline;
    }

</style>

<div class="login-container">

    <div class="login-card">

        <div class="title">
            LA CANTERA
        </div>

        <div class="subtitle">
            Iniciar Sesión
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">

                <label for="email">
                    Correo Electrónico
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                    class="input-custom"
                    placeholder="ejemplo@gmail.com"
                >

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>

            <div class="input-group">

                <label for="password">
                    Contraseña
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="input-custom"
                    placeholder="********"
                >

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>

            <div class="remember">

                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                >

                <label for="remember_me">
                    Recordarme
                </label>

            </div>

            <button type="submit" class="login-btn">
                INICIAR SESIÓN
            </button>

            <div class="links">

                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>

                @endif

                <a href="{{ route('register') }}">
                    ¿No tienes cuenta? Regístrate
                </a>

            </div>

        </form>

    </div>

</div>