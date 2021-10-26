   <!-- Navbar -->
   <nav class="navbar navbar-expand-md navbar-light border-bottom">
          <button class="navbar-toggler ml-auto float-xs-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end text-right  navbar-custom" id="navbarTogglerDemo01">
            <ul class="navbar-nav  mt-2 mt-lg-0 font-weight-bold">
              <li @click="menu=0" class="nav-item ">
                <a class="nav-link" href="#">Inicio</a>
              </li>
              <li @click="menu=1" class="nav-item">
                <a class="nav-link" href="#">¿Quién soy?</a>
              </li>
              <li @click="menu=2" class="nav-item">
                <a class="nav-link" href="#">Portafolio</a>
              </li>
              <li @click="menu=3" class="nav-item">
                  <a class="nav-link" href="#">Contacto</a>
              </li>
              <li @click="menu=4" class="nav-item">
                <a  class="nav-link animate__animated animate__pulse animate__infinite animate__delay-2s btn_curriculum text-primary" >Ver curriculum</a>            
              </li>
            </ul>
          </div>
        </nav>
    <!-- Fin navbar -->