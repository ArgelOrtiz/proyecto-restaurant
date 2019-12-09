<template>
  <div>
    <nav-bar></nav-bar>
    <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(/assets/dist/img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="/assets/dist/img/curve_white.svg" class="seperator" ></p>
                  <h1 class="probootstrap-heading ">Usuarios</h1>
                  <div class="probootstrap-sub-wrap">Sección para la administración de usuarios</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>
  <usuarios :users ="arr_usuarios" @reload="reload()"></usuarios>
  </div>
</template>

<script>
import NavBar   from "@/components/nav/navbar";
import Usuarios from "@/components/admin-usuarios/usuarios";
import API      from "@/api/api-admin-usuarios";

export default {
  data() {
    return {
      arr_usuarios : []
    }
  },

  components:{
    NavBar,
    Usuarios
  },
  methods: {
    get_usuarios: async function(){

      const consulta    = await API.usuarios.get_usuarios()
      this.arr_usuarios =  consulta.data
    },

    reload:       async function(){

      const consulta    = await API.usuarios.get_usuarios()
      this.arr_usuarios =  consulta.data
    }
    
    
  },
  mounted() {
    this.get_usuarios();
  },
};

</script>