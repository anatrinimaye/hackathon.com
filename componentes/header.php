

    <!-- Contactos antes del header -->
    <div class=" d-flex cajaContactos">
        <!-- contactos de la izquierda -->
        <div class="d-flex contacts col-lg-3">
            <a class="nav-link" href="tel:+240222319976"><i class="fa-solid fa-phone text-warning"></i> <span>+240 222 352 345</span></a>
            <a class="nav-link" href="mailto:prueba@gmail.com"><i class="fa-solid fa-envelope text-warning"></i> <span>prueba@gmail.com</span></a>
        </div>
        <!-- redes de la derecha y el login -->
        <div class="d-flex redesYlog col-lg-2 ">
            <!-- redes -->
            <div class="redes col-lg-7 d-flex">
                <a class="" href=""> <i class="fa-brands fa-facebook p-2 text-warning"></i> </a>
                <a class="" href=""> <i class="fa-brands fa-instagram p-2 text-warning"></i></a>
                <a class="" href=""> <i class="fa-brands fa-twitter p-2 text-warning"></i></a>
                <a class="" href=""> <i class="fa-brands fa-linkedin-in p-2 text-warning"></i></a>
            </div>
        </div>
        <!-- login -->
        <div class="login text-center">
                    <!-- Boton para el modal -->
                <button type="button" class="btn btnLogin" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa-solid fa-user text-secondary fs-5"></i>
                </button>

                <!-- Modal de inicio de sesion -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">     
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <i class="fa-solid fa-user fs-1 p-3"></i>
                                <form action="">
                                    <input class="form-control mt-4 " placeholder="Correo" name="" type="email">
                                    <input class="form-control mt-4 " placeholder="Password" name="" type="password">
                                    <input class="form-control mt-4 btn btn-primary" value="Acceder" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        
     <!-- Header -->
    <div class="d-flex header mt-2">
        <!-- Logo -->
        <div class=" col-lg-3 col-md-12 d-flex logo">
            <p class="h4 pt-0"><i class="fa-solid fa-skull fs-4 "></i> <span>Dark</span> Web</p>

            <!-- BOTON DE LA AMBURGUESA-->
            <div class=" d-lg-none d-md-block burger ">
                <button class="btn btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-bars fs-3"></i>
                </button>
           
            </div>
        </div>
        <!-- enlaces -->
        <div class="col-lg-5 d-none d-lg-flex enlaces pe-5">
            <a class="nav-link" href=""> <span>Inicio</span> </a>
            <a class="nav-link" href=""> <span> Sobre Nosotros</span></a>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                </button>
                <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Servicio 1</a></li>
                        <li><a class="dropdown-item" href="#">Servicio 2</a></li>
                        <li><a class="dropdown-item" href="#">Servicio 3</a></li>
                </ul>
            </div>
            <a class="nav-link" href=""> <span>Páginas</span> </a>
            <a class="nav-link" href=""><span>Contacto</span></a>
        </div>
        <!-- Buscador y Boton de cambio de tema -->
        <div class="col-lg-4 d-lg-flex buscYbtncambio">
            <!-- Buscador -->
            <form class=" d-none d-lg-flex" role="search">
               
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-success" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <!-- Boton de cambio de tema -->
            <button class="btncamTema d-none d-lg-flex" type="button" onclick="cambiarTema()">
                <i class="fa-solid fa-moon"></i>
            </button>
         <!-- Cuerpo del offcanvas -->
         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <!-- Logo -->
                    <div class=" col-lg-3 d-flex logo">
                        <!-- <p> <i class="fa-solid fa-heart fs-3 pt-3"></i> </p> -->
                        <p class="h4 pt-0"><i class="fa-solid fa-skull fs-4 "></i> <span>Dark</span> Web</p>
                        
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <!-- enlaces -->
                    <div class=" enlaces ps-3">
                        <a class="nav-link " href="#"> <span>Inicio</span> </a>
                        <a class="nav-link mt-3" href="#"> <span> Sobre Nosotros</span></a>
                        <a class="nav-link mt-3" href="#"> <span>Páginas</span> </a>
                        <div class="dropdown mt-3">
                            <button class="btn dropdown-toggle ps-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Servicio 1</a></li>
                                <li><a class="dropdown-item" href="#">Servicio 2</a></li>
                                <li><a class="dropdown-item" href="#">Servicio 3</a></li>
                            </ul>
                        </div>
                        <a class="nav-link mt-3 mb-2" href="#"><span>Contacto</span></a>
                    </div>
                    <!-- Buscador y Boton de cambio de tema -->
                    <div class="col-md-3 buscYbtncambio">
                        <!-- Buscador -->
                        <form class="d-flex col-10 ps-3" role="search">
                            <button class="btn btn-success me-2" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <input class="form-control " type="search" placeholder="Buscar..." aria-label="Search">
                        </form>
                    </div>

                   
                </div>
        </div>

    </div>
   
 

    
    <script>
        function cambiarTema() { 
        document.body.classList.toggle("oscuro"); }
    </script>    
    