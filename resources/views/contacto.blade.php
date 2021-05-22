@extends('layout')

@section('title' , 'SafaGym')

@section('content')
    <!DOCTYPE html>
    <html>
        <body>
        <div>
            <h1>¿DÓNDE ESTAMOS?</h1>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.4872618540953!2d-5.99657878447492!3d37.401956341293506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126bf7fe7ddfdb%3A0x524cf09644a83381!2sCalle%20Fresa%2C%201%2C%2041002%20Sevilla!5e0!3m2!1ses!2ses!4v1621588220544!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>
        <div>
            <h1>NUESTRO HORARIO</h1>
            L - V : 7:00 - 23:00
            <br>
            S : 9:00 - 14:00
        </div>
        <br>
        <form action="mailto:emarchenamejias@safareyes.es" method="get" enctype="text/plain">
            <h1>SafaGym ¿DÍGAME?</h1>
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="DÉJANOS TU NOMBRE">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" id="numero" name="numero" placeholder="¿A QUÉ NÚMERO TE LLAMAMOS?">
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="¿NOS RECUERDAS TU EMAIL?">
            </div>
            <br>
            <div class="form-group">
                <textarea class="form-control" id="resumen" name="resumen" rows="3" placeholder="¿ALGO MÁS QUE AÑADIR?"></textarea>
            </div>
            <br>
            <input type="submit" name="submit" value="Enviar" />
            <input type="reset" name="reset" value="Resetear" />
            <br>

        </form>
        </body>
    </html>
@endsection
