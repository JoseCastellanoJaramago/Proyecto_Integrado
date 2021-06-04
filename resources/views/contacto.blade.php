@extends('layout')

@section('title' , 'SafaGym')

@section('content')

    <div class="card bg-light" align="center">
        <h4 class="card bg-info text-white" align="center">¿DÓNDE ESTAMOS?</h4>
        <br>
        <iframe id="centro" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.4872618540953!2d-5.99657878447492!3d37.401956341293506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126bf7fe7ddfdb%3A0x524cf09644a83381!2sCalle%20Fresa%2C%201%2C%2041002%20Sevilla!5e0!3m2!1ses!2ses!4v1621588220544!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <br><br>
    <div class="card bg-light" align="center">
        <h4 class="card bg-info text-white" align="center">NUESTRO HORARIO</h4>
        <p align="left" ><b>Lunes - Viernes:</b> 07:00 - 23:00</p>
        <p align="left"><b>Sábados:</b> 09:00 - 14:00</p>
    </div>
    <br>
    <div class="card bg-light" align="center">
        <form action="mailto:emarchenamejias@safareyes.es" method="get" enctype="text/plain">
            <h4 class="card bg-info text-white" align="center">CONTACTA CON NOSOTROS</h4>
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Déjanos tu nombre">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" id="numero" name="numero" placeholder="¿A qué número te llamamos?">
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="¿Nos recuerdas tu email?">
            </div>
            <br>
            <div class="form-group">
                <textarea class="form-control" id="resumen" name="resumen" rows="3" placeholder="¿Algo más que añadir?"></textarea>
            </div>
            <br>
            <input class="btn btn-secondary text-white" type="submit" name="submit" value="Enviar" />
            <input class="btn btn-secondary text-white" type="reset" name="reset" value="Resetear" />
            <br><br>
        </form>
    </div>

@endsection
