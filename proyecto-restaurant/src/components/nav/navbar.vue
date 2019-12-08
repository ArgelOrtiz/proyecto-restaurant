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
            <li v-if="!$store.state.session">
              <a @click="$refs.modal_session.open()">Iniciar sesion</a>
            </li>
            <li v-else>
              <a @click="cerrar_sesion()">Cerrar sesion</a>
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
          <input v-model="usr" type="text" class="form-control" id="staticEmail" />
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
          <input v-model="pass" type="password" class="form-control" id="inputPassword" placeholder="Contraseña" />
        </div>
      </div>
        <div class="col-md-12">
          <label class="text-danger">{{message}}</label>
        </div>
      <button slot="button" class="btn btn-danger" @click="$refs.modal_session.close()">Cerrar</button>
      <button slot="button" class="btn btn-success" @click="iniciar_sesion()">Aceptar</button>
    </sweet-modal>
  </div>
</template>

<script>
// import ModalSession from '@/components/modal/modal-sesion';
import { SweetModal } from 'sweet-modal-vue'
import API from "@/api/api-sesiones";
import {mapState} from 'vuex'

export default {
  components : {
    SweetModal
  },
  data(){
    return{
      //esto lo manejas con la sesión creo
      show : true,
      usr : null,
      pass : null,
      message : null
    }
  },
  computed : {
    ...mapState(['session']),
  },
  methods: {
    redirige(){
      this.$router.push("/usuario")
    },
    async iniciar_sesion() {
      const sesion = await API.sesiones.inicia_sesion(this.usr, this.pass)

      if(sesion.data.status == 1){
        this.message = null
        this.$store.commit('estado_sesion', true,{root: true})

        this.$refs.modal_session.close()
      }else {
        this.message = sesion.data.message
        this.$store.commit('estado_sesion', false,{root: true})
      }
    },
    async cerrar_sesion () {
      if(confirm('¿Cerrar sesion?')){
        const sesion = await API.sesiones.cierra_sesion()

        alert(sesion.data.message)

        this.$store.commit('estado_sesion', false,{root: true})
      }
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