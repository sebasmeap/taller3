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

        @if(session('success'))

        <div style="
            background:#22c55e;
            color:white;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        ">
            {{ session('success') }}
        </div>

        @endif

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

            <table id="tabla-atletas" style="
                width:100%;
                border-collapse:separate;
                border-spacing:0 15px;
            ">

                <thead>

                <tr style="
                    background:#22c55e;
                    color:white;
                    text-align:left;
                ">

                    <th style="padding:18px; border-top-left-radius:14px; border-bottom-left-radius:14px;">
                        Nombres
                    </th>

                    <th style="padding:18px;">Apellidos</th>

                    <th style="padding:18px;">Edad</th>

                    <th style="padding:18px;">Documento</th>

                    <th style="padding:18px;">Correo</th>

                    <th style="padding:18px;">Teléfono</th>

                    <th style="padding:18px;">Ciudad</th>

                    <th style="padding:18px;">Categoría</th>

                    <th style="padding:18px;">Actualizar</th>

                    <th style="padding:18px; border-top-right-radius:14px; border-bottom-right-radius:14px;">
                        Eliminar
                    </th>

                </tr>

                </thead>

                <tbody>

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
                        color:#22c55e;
                        font-weight:bold;
                    ">
                        {{ $atleta->categoria }}
                    </td>

                    <td style="padding:20px;">

                        <a href="{{ route('atletas.edit', $atleta->id) }}"
                        style="
                            background:#3b82f6;
                            color:white;
                            padding:10px 15px;
                            border-radius:10px;
                            text-decoration:none;
                            font-weight:bold;
                        ">
                            Actualizar
                        </a>

                    </td>

                    <td style="
                        padding:20px;
                        border-top-right-radius:14px;
                        border-bottom-right-radius:14px;
                    ">

                        <form 
                        action="{{ route('atletas.destroy', $atleta->id) }}"
                        method="POST"
                        onsubmit="return confirm('¿Seguro que deseas eliminar este registro?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                            style="
                                background:#ef4444;
                                color:white;
                                padding:10px 15px;
                                border:none;
                                border-radius:10px;
                                cursor:pointer;
                                font-weight:bold;
                            ">
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

                </tbody>

            </table>

        </div>

        @endif

    </div>

</div>

<link rel="stylesheet"
href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready(function () {

    $('#tabla-atletas').DataTable({

        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
        },

        pageLength: 5

    });

});

</script>

@endsection