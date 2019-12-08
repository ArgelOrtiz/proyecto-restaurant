<template>
  <div>
    <header role="banner" class="probootstrap-header text-center">
      <div class="row">
        <a href="index.html" class="probootstrap-logo visible-xs">
          <img
            src="/assets/dist/img/logo_sm.png"
            class="hires"
            width="120"
            height="33"
            alt="Free Bootstrap Template by uicookies.com"
          />
        </a>

        <a href="#" class="probootstrap-burger-menu visible-xs">
          <i>Menu</i>
        </a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active">
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">Acerca de</a>
            </li>
            <li>
              <a href="rooms.html">Menú</a>
            </li>
            <li class="hidden-xs probootstrap-logo-center">
              <a href="index.html">
                <img
                  src="/assets/dist/img/logo_md.png"
                  class="hires"
                  width="181"
                  height="50"
                  alt="Free Bootstrap Template by uicookies.com"
                />
              </a>
            </li>
            <li>
              <a href="reservation.html">Promociones</a>
            </li>
            <li>
              <a href="blog.html">Contacto</a>
            </li>
            <li>
              <a href="" data-toggle="modal" data-target="#modal-1">Iniciar sesion</a>
            </li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu">
              <i>Menu</i>
            </a>
            <h5>Contactanos</h5>
            <ul class="social-buttons">
              <li>
                <a href="#">
                  <i class="icon-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon-facebook2"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon-instagram2"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <modal-session></modal-session>
  </div>
</template>

<script>
import ModalSession from '@/components/modal/modal-sesion';
export default {
  components : {
    ModalSession
  },
  data(){
    return{
      //esto lo manejas con la sesión creo
      show : true
    }
  },
  methods: {
    redirige(){
      this.$router.push("/usuario")
    } 
  },
};
</script>

<style scoped>
header {
  justify-content: center !important;
  display: inline-flex;
}
</style>