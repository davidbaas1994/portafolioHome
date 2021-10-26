<template>
<main class="main">
<div>
<!-- col-1 -->
      <div class="row ">
        <div class="col-md-12 text-center ">
          <div class="encabezado">
           <h1 class="border-bottom texto-encabezado">Hola a todo el mundo</h1>
           <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro illo libero ex perspiciatis adipisci earum incidunt, iusto hic unde esse!
           </p>
          </div>
        </div>
      </div>
    <!-- fin col-1 -->

    <!-- col-2 -->
    <div class="row fondo">
      <div class="col-lg-8 col-md-7 animation-wrapper">
        <img src="img/laptop.png" alt="imagen laptop" class="animate__animated animate__bounceInLeft img-responsive animate" data-wow-duration="2s">
        <img src="img/smartphone.png" alt="imagen smartphone" class="animate__animated animate__bounceInRight img-responsive animate slide-right hidden-xs" data-wow-duration="2s">
      </div>
      <div class="col-lg-4 col-md-5 sm-text-center ">
        <h1 class="">
          Diseño responsivo con HTML y CSS
        </h1>
        <button class="btn btn-info">
          Ver proyectos
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
    <!-- fin col-2 -->

    <!-- col-3 -->
    <div class="row">
      <div class="card-deck">
        <div class="card custom_card">
          <div class="card-body text-center">
            <i class="fas fa-database text-info h3"></i>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card custom_card">
          <div class="card-body text-center">
            <img class="" src="img/googleMaps.png" height="80px" alt="Logo Maps">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card custom_card">
          <div class="card-body text-center">
            <img class="" src="img/logoAngular.png" height="80px" alt="Logo angular">
            <h5 class="card-title">App de películas con Angular 11</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
             <button class="btn btn-info">
          Ver más
        </button>
          </div>
        </div>
      </div>
    </div>
      
    <!-- fin-col-3 -->
</div>
 </main>
</template>

<script>
    export default {
        mounted() {
            // console.log('component mounted');
        }
    }
</script>