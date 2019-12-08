<template>
  <div>
   <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Usuarios</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Sección para la administración de usuarios</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>

  <section class="probootstrap-section">
    <!-- contenido -->
    <div class="container">
      <div class="row">
        <b-col variant="info" align="right" lg="12" class="pb-2">
          <b-button size = "lg">Agregar usuario</b-button>
        </b-col>
      </div>
    </div>
  </section>
  
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </div>
</template>

<script>
export default {
  data(){

  }
}
</script>