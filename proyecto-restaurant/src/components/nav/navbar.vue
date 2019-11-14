<template>
  <div>
    <header class="nav-wrapper">
      <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
          <a class="navbar-brand" href="#">
            <img width="150px" src="/assets/dist/images/brand.png">
            <!-- <h3>Restaurant ®</h3> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <h4>Home</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <h4>Menú</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <h4>Promociones</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">
                  <h4>Acerca de</h4>
                </a>
              </li>
              <li class= "nav-item" v-if = "show" @click = "redirige()">
                <a class="nav-link" href="#">
                  <h4>Usuarios</h4>
                </a>
              </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
          </div>
          <form class="form-inline">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#" v-b-modal.modal-1>Iniciar Sesion</a>
              </li>
            </ul>
          </form>
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
/* .header {
  background: url(/assets/dist/images/wallpaper.jpg) no-repeat center;
  background-size: cover;
  min-height: 100vh;
}  */

.navbar {
  /* background-color: transparent !important; */
  background-color: rgba(0, 0, 0, 0.2) !important;
}
.fixed-top {
  position: absolute;
  /* top: 0; */
  /* right: 0; */
  /* left: 0; */
  z-index: 1030;
}

h4 {
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif !important;
}
</style>