<div class="row">
    <div class="col-md-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url("direktor/index/")?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unos podataka
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="<?php echo site_url("direktor/ucenik/") ?>">Učenik</a>
                            <a class="dropdown-item" href="<?php echo site_url("direktor/profesor/") ?>">Profesor</a>
                            <a class="dropdown-item" href="<?php echo site_url("direktor/predmet/") ?>">Predmet</a>
                        </div>
                    </div>

<<<<<<< HEAD:application/views/korisnik/korisnik_menu.php

                   <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("admin/ucenik/")?>">Učenik</a>
=======
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("direktor/ucenik/")?>">Učenik</a>
>>>>>>> 9e66accd94b8ad24a152c7105bdf15a58bbb10e0:application/views/direktor/direktor_menu.php
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("direktor/profesor/")?>">Profesor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("direktor/predmet/")?>">Predmet</a>
                    </li>-->
                   
                   
                    <li class="nav-item">
                        <a class="nav-link disabled" href="<?php echo site_url("direktor/prijava_ispita/")?>">Prijava ispita</a>
                    </li>
                   -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unos podataka
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="<?php echo site_url("admin/ucenik/") ?>">Učenik</a>
                            <a class="dropdown-item" href="<?php echo site_url("admin/profesor/") ?>">Profesor</a>
                            <a class="dropdown-item" href="<?php echo site_url("admin/predmet/") ?>">Predmet</a>
                        </div>
                    </div>
                   
                    <li class="nav-item">
                        <a class="nav-link disabled" href="<?php echo site_url("direktor/raspored/")?>">Raspored</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("direktor/statistika/")?>">Statistika</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("direktor/administracija/")?>">Administracija</a>
                    </li>
                </ul>
                <ul  class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link mr-sm-2"  href="<?php echo site_url("direktor/do_logout/")?>">Izloguj se</a>
                </li>
                </ul>
              

            </div>
        </nav>
    </div>
</div>






