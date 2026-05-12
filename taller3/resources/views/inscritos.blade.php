@extends('layouts.app')

@section('content')

<div style="
    min-height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.82), rgba(0,0,0,0.82)),
    url('https://images.unsplash.com/photo-1517466787929-bc90951d0974');
    background-size: cover;
    background-position: center;
    padding: 60px;
">

    <div style="
        max-width: 1200px;
        margin: auto;
        background: rgba(15, 23, 42, 0.96);
        padding: 50px;
        border-radius: 28px;
        box-shadow: 0 15px 45px rgba(0,0,0,0.55);
        color: white;
        backdrop-filter: blur(6px);
    ">

        <h1 style="
            text-align:center;
            font-size:48px;
            color:#22c55e;
            margin-bottom:15px;
            letter-spacing:2px;
        ">
            Lista de Inscritos
        </h1>

        <h2 style="
            text-align:center;
            font-size:22px;
            color:#cbd5e1;
            margin-bottom:50px;
            font-weight:normal;
        ">
            Escuela de Fútbol La Cantera
        </h2>

        @if($atletas->isEmpty())

            <div style="
                background: rgba(255,255,255,0.05);
                padding: 30px;
                border-radius: 18px;
                text-align:center;
                color:#cbd5e1;
                font-size:20px;
            ">
                No hay inscritos todavía.
            </div>

        @else

        <div style="overflow-x:auto;">

            <table style="
                width:100%;
                border-collapse:separate;
                border-spacing:0 15px;
            ">

                <tr style="
                    background:#22c55e;
                    color:white;
                    text-align:left;
                ">

                    <th style="padding:18px; border-top-left-radius:14px; border-bottom-left-radius:14px;">Nombres</th>

                    <th style="padding:18px;">Apellidos</th>

                    <th style="padding:18px;">Edad</th>

                    <th style="padding:18px;">Documento</th>

                    <th style="padding:18px;">Correo</th>

                    <th style="padding:18px;">Teléfono</th>

                    <th style="padding:18px;">Ciudad</th>

                    <th style="padding:18px; border-top-right-radius:14px; border-bottom-right-radius:14px;">Categoría</th>

                </tr>

                @foreach($atletas as $atleta)

                <tr style="
                    background:#1e293b;
                    transition:0.3s;
                ">

                    <td style="
                        padding:20px;
                        border-top-left-radius:14px;
                        border-bottom-left-radius:14px;
                        color:#f8fafc;
                    ">
                        {{ $atleta->nombres }}
                    </td>

                    <td style="padding:20px; color:#f8fafc;">
                        {{ $atleta->apellidos }}
                    </td>

                    <td style="padding:20px; color:#f8fafc;">
                        {{ $atleta->edad }}
                    </td>

                    <td style="padding:20px; color:#f8fafc;">
                        {{ $atleta->documento }}
                    </td>

                    <td style="padding:20px; color:#f8fafc;">
                        {{ $atleta->correo }}
                    </td>

                    <td style="padding:20px; color:#f8fafc;">
                        {{ $atleta->telefono }}
                    </td>

                    <td style="padding:20px; color:#f8fafc;">
                        {{ $atleta->ciudad }}
                    </td>

                    <td style="
                        padding:20px;
                        border-top-right-radius:14px;
                        border-bottom-right-radius:14px;
                        color:#22c55e;
                        font-weight:bold;
                    ">
                        {{ $atleta->categoria }}
                    </td>

                </tr>

                @endforeach

            </table>

        </div>

        @endif

    </div>

</div>

@endsection