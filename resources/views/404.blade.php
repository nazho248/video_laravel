@include(('templates.navbar'))

<div class="rounded-circle position-absolute bg-white"
     style="width: 150px; height: 150px; bottom: 0; right: 0; transform: translate(-50%, -10%);"></div>
<div class="rounded-circle position-absolute bg-info"
     style="width: 150px; height: 150px; bottom: 10%; right: 0; transform: translate(-20%, -10%);"></div>


<!--404 -->
<section class="min-vh-100 bg-black d-flex align-items-center justify-content-center flex-column">
    <h1 class="text-center text-white fs-1 fw-bold">404</h1>
    <p class="text-center text-white fs-2 fw-bold">Página no Encontrada</p>
    <p class="text-center text-white fs-5 fw-bold">La página que buscas no existe o no se encuentra disponible</p>
    <div class="text-center">
        <a href="{{url("/")}}" class="btn btn-dark p-3 ">Volver al Inicio</a>
    </div>
</section>

<script src="{{asset("/js/main.js")}}"></script>
