@extends('layouts.app')

@section('content')

<div style="
    min-height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),
    url('https://images.unsplash.com/photo-1517466787929-bc90951d0974');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
">

    <div style="
        background: rgba(15, 23, 42, 0.92);
        width: 100%;
        max-width: 950px;
        border-radius: 25px;
        padding: 60px;
        color: white;
        box-shadow: 0 10px 35px rgba(0,0,0,0.5);
        backdrop-filter: blur(6px);
    ">

        <h1 style="
            font-size: 60px;
            margin-bottom: 10px;
            color: #22c55e;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
        ">
            LA CANTERA
        </h1>

        <h2 style="
            text-align: center;
            font-size: 24px;
            color: #cbd5e1;
            margin-bottom: 40px;
            font-weight: normal;
        ">
            Escuela de Fútbol
        </h2>

        <p style="
            font-size: 20px;
            line-height: 1.9;
            text-align: center;
            color: #e2e8f0;
            margin-bottom: 45px;
        ">
            Formamos jugadores con disciplina, pasión y compromiso.
            En La Cantera buscamos desarrollar talento dentro y fuera de la cancha,
            ofreciendo entrenamientos de calidad para niños y jóvenes que desean crecer en el fútbol.
        </p>

        <div style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 45px;
        ">

            <div style="
                background: rgba(255,255,255,0.05);
                padding: 30px;
                border-radius: 18px;
                border: 1px solid rgba(255,255,255,0.08);
                text-align: center;
            ">
                <h3 style="color:#22c55e; margin-bottom:15px;">
                    Entrenamiento
                </h3>

                <p style="color:#cbd5e1; line-height:1.7;">
                    Sesiones dinámicas enfocadas en técnica, resistencia y desarrollo físico.
                </p>
            </div>

            <div style="
                background: rgba(255,255,255,0.05);
                padding: 30px;
                border-radius: 18px;
                border: 1px solid rgba(255,255,255,0.08);
                text-align: center;
            ">
                <h3 style="color:#22c55e; margin-bottom:15px;">
                    Competencia
                </h3>

                <p style="color:#cbd5e1; line-height:1.7;">
                    Participación en torneos y actividades deportivas para fortalecer la experiencia competitiva.
                </p>
            </div>

            <div style="
                background: rgba(255,255,255,0.05);
                padding: 30px;
                border-radius: 18px;
                border: 1px solid rgba(255,255,255,0.08);
                text-align: center;
            ">
                <h3 style="color:#22c55e; margin-bottom:15px;">
                    Formación
                </h3>

                <p style="color:#cbd5e1; line-height:1.7;">
                    Desarrollo de valores como disciplina, respeto y trabajo en equipo.
                </p>
            </div>

        </div>

        <div style="text-align:center;">

            <a href="{{ url('/inscripcion') }}">

                <button style="
                    background: #22c55e;
                    color: white;
                    border: none;
                    padding: 18px 45px;
                    font-size: 20px;
                    border-radius: 14px;
                    cursor: pointer;
                    font-weight: bold;
                    letter-spacing: 1px;
                    transition: 0.3s;
                    box-shadow: 0 5px 20px rgba(34,197,94,0.4);
                ">
                    INSCRIBIRME
                </button>

            </a>

        </div>

    </div>

</div>

@endsection