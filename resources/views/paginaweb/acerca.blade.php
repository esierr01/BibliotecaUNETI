@extends('layout.paginaweb')

@section('title', 'BibliotecaUNETI - Acerca')

@section('content')
    <div class="contenedor-titulo">
        <div class="col-10 offset-1 text-center mt-4">
            <div class="row">
                <span class="titulo-ppal-web">Acerca</span>
            </div>

            <div class="caja-titulo"></div>
        </div>
    </div>

    <div class="container contenedor-acerca">
        <p class="texto-acerca col-10 offset-1">
            Bienvenido al Sitio WEB Biblioteca, un proyecto desarrollado por Emmanuel Sierra, estudiante de
            Ingeniería en Informática en su cuarto semestre, de la Universidad Nacional Experimental de Las
            Telecomunicaciones e Informática. El sitio WEB es el resultado de un trabajo final para el módulo 2 de
            Programación 2, realizado en Caracas, Venezuela, en el año 2024. <br><br>

            El desarrollo se realizó utilizando PHP con Laravel para el backend, aprovechando su potencia y flexibilidad,
            para manejar la lógica de negocio y la interacción con MySQL, elegida como sistema de gestión de bases de datos.
            Para la presentación y diseño, se adoptó Bootstrap, un framework que facilita la creación de interfaces
            responsivas y atractivas, junto con FontAwesome para añadir iconos que mejoran la experiencia del usuario.
            <br><br>

            El frontend está construido con HTML, CSS y JavaScript, combinando estos lenguajes para ofrecer una navegación
            fluida y una estética agradable, independientemente del dispositivo utilizado para acceder al sitio. Este
            proyecto es un testimonio del esfuerzo que realice, aplicando mis conocimientos y habilidades teóricos en un
            proyecto práctico, superando desafíos y alcanzando resultados significativos.
        </p>
    </div>
@endsection
