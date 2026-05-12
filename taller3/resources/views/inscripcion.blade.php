@extends('layouts.app')

@section('content')

<div style="
    min-height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.82), rgba(0,0,0,0.82)),
    url('https://images.unsplash.com/photo-1517466787929-bc90951d0974');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px;
">

    <div style="
        width: 100%;
        max-width: 980px;
        background: rgba(15, 23, 42, 0.96);
        padding: 70px;
        border-radius: 28px;
        box-shadow: 0 15px 45px rgba(0,0,0,0.55);
        color: white;
        backdrop-filter: blur(6px);
    ">

        <h1 style="
            text-align: center;
            font-size: 48px;
            color: #22c55e;
            margin-bottom: 15px;
            letter-spacing: 2px;
        ">
            Inscripción
        </h1>

        <h2 style="
            text-align: center;
            font-size: 24px;
            color: #cbd5e1;
            margin-bottom: 65px;
            font-weight: normal;
        ">
            Escuela de Fútbol La Cantera
        </h2>

        @if(session('success'))
            <div style="
                background: rgba(34,197,94,0.15);
                border: 1px solid #22c55e;
                color: #bbf7d0;
                padding: 20px;
                border-radius: 14px;
                margin-bottom: 45px;
            ">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="
                background: rgba(239,68,68,0.15);
                border: 1px solid #ef4444;
                color: #fecaca;
                padding: 20px;
                border-radius: 14px;
                margin-bottom: 45px;
            ">
                <ul style="margin:0; padding-left:20px;">
                    @foreach ($errors->all() as $error)
                        <li style="margin-bottom:8px;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('guardar.atleta') }}">

            @csrf

            <div style="
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(360px,1fr));
                column-gap: 55px;
                row-gap: 45px;
            ">

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Nombres
                    </label>

                    <input type="text" name="nombres" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Apellidos
                    </label>

                    <input type="text" name="apellidos" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Edad
                    </label>

                    <input type="number" name="edad" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Documento de identidad
                    </label>

                    <input type="text" name="documento" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Correo electrónico
                    </label>

                    <input type="email" name="correo" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Teléfono
                    </label>

                    <input type="text" name="telefono" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Género
                    </label>

                    <select name="genero" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                        <option>Masculino</option>
                        <option>Femenino</option>
                        <option>Prefiero no decirlo</option>
                    </select>
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Ciudad
                    </label>

                    <input type="text" name="ciudad" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        Categoría
                    </label>

                    <select name="categoria" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                        <option>Infantil</option>
                        <option>Juvenil</option>
                        <option>Adulto</option>
                        <option>Profesional</option>
                    </select>
                </div>

                <div>
                    <label style="
                        color:#cbd5e1;
                        font-size:16px;
                        display:block;
                        margin-bottom:14px;
                    ">
                        ¿Tiene experiencia en fútbol?
                    </label>

                    <select name="experiencia" style="
                        width:100%;
                        padding:18px;
                        border:none;
                        border-radius:16px;
                        background:#1e293b;
                        color:white;
                        font-size:16px;
                    ">
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                </div>

            </div>

            <div style="
                text-align:center;
                margin-top:70px;
            ">

                <button type="submit" style="
                    background:#22c55e;
                    color:white;
                    border:none;
                    padding:20px 60px;
                    border-radius:16px;
                    font-size:19px;
                    font-weight:bold;
                    cursor:pointer;
                    letter-spacing:1px;
                    box-shadow:0 6px 24px rgba(34,197,94,0.4);
                ">
                    ENVIAR INSCRIPCIÓN
                </button>

            </div>

        </form>

    </div>

</div>

@endsection