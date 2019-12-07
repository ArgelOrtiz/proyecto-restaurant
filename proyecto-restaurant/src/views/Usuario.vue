<template>
  <div>
    <nav-bar></nav-bar>
    <section class="probootstrap-cta probootstrap-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-cta-heading">Administración de usuarios</h2>
          </div>
        </div>
      </div>
    </section>
    <usuarios :arr_usuarios ="arr_usuarios" @reload="reload()"></usuarios>
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