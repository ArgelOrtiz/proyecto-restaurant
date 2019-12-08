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
              <a @click="$refs.modal_session.open()">Iniciar sesion</a>
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
    <!-- <modal-session></modal-session> -->
    <sweet-modal ref="modal_session" title="Iniciar Sesion" overlay-theme="dark">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="staticEmail" />
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" />
        </div>
      </div>

      <button slot="button" class="btn btn-danger" @click="$refs.modal_session.close()">Cerrar</button>
      <button slot="button" class="btn btn-success">Aceptar</button>
    </sweet-modal>
  </div>
</template>

<script>
// import ModalSession from '@/components/modal/modal-sesion';
import { SweetModal } from 'sweet-modal-vue'

export default {
  components : {
    SweetModal
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