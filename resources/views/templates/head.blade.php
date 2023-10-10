<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset("/img/Logo%20Universidad.png")}}" alt="">

        </a>
        <nav id="navbar" class="navbar">
            <ul>


                <li><a class="
                    {{request()->route()->uri() == "/" ? "active" : "" }}"
                       href="{{url("/")}}
               ">Inicio</a></li>
                <li><a class="{{ request()->route()->uri() == "plan_estudios" ? "active" : "" }}"
                       href="{{url("/plan_estudios")}}">Plan de Estudios</a></li>
                <li><a class="{{ request()->route()->uri() == "contacto" ? "active" : "" }}" href="{{url("/contacto")}}">Contacto</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
