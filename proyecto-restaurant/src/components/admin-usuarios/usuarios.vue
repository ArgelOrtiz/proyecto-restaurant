<template>
  <div>
   <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(/assets/dist/img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="/assets/dist/img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
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
        <b-col align="right" lg="12" class="pb-2">
          <b-button variant="info" size = "lg">Agregar usuario</b-button>
        </b-col>
      </div>
      <div class="row">
        <b-col lg="12">

        </b-col>
      </div>
    </div>
  </section>
  
   <modal-usr></modal-usr>
  </div>
</template>

<script>
import ModalUsr from '@/components/modal/modal-usuario';

export default {
  components:{
    ModalUsr
  },
  data(){
    return{

    }

  }
}
</script>