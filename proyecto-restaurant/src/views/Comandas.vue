<template>
  <div>
    <nav-bar></nav-bar>
    <section class="probootstrap-cta probootstrap-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-cta-heading">Administración de comandas</h2>
          </div>
        </div>
      </div>
    </section>
        <section class="probootstrap-section probootstrap-section-dark">
      <h2 class="mt0">Comandas</h2>
      <div class="container">
        <div class="row probootstrap-gutter10">
          <div v-for="(obj,index) in comandas" :key="index" class="col-md-5"><!--Her-->
            <div class="probootstrap-block-image-text">
              <figure>
                <a href="#" class="image-popup">
                  <img src="" alt="" class="img-responsive" />
                </a>
                <!-- <div class="actions">
                  <a href="https://vimeo.com/45830194" class="popup-vimeo">
                    <i class="icon-play2"></i>
                  </a>
                </div>-->
              </figure>
              <div class="text">
                <h3>
                  <a href="#">Comanda {{obj.id_comanda_producto}}</a>
                </h3>
                <div class="post-meta">
                  <ul>
                    <li>
                      <i class="icon-user"></i> 
                      Usuario
                    </li>
                    <br>
                    <li>
                      <i class="icon-table"></i>
                       Cantidad
                       {{obj.cantidad}}
                    </li>
                    <li>
                       {{obj.cantidad}}
                    </li>
                  </ul>
                </div>
                <p class="text">Status</p>
                <p>
                  <a class="btn btn-info" style="margin:5px; " @click="detalle_comanda_producto()">Detalle</a>
                  <a class="btn btn-secondary" style="margin:5px;">Editar</a>
                  <a class="btn btn-danger" style="margin:5px;">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <sweet-modal title="Detalle comanda" overlay-theme="dark" ref="modal_detalle">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="producto_id_platillo">Platillo</label>
          <input v-model="comanda_detalle.producto_id_platillo"
          type="text"
          class="form-control"/>
        </div>
        <div class="form-group col-md-2">
          <label for="comanda_id_comanda">Comanda</label>
          <input
            v-model.number="comanda_detalle.comanda_id_comanda"
            type="text"
            class="form-control"
          />
        </div>      
        <div class="form-group col-md-2">
          <label for="comanda_id_comanda">Cantidad</label>
          <input
            v-model.number="comanda_detalle.cantidad"
            type="text"
            class="form-control"
          />
        </div>
      </div>
            <button slot="button" class="btn btn-success" style="margin:5px; ">Aceptar</button>
      <button slot="button" class="btn btn-danger" style="margin:5px; ">Cancelar</button>
    </sweet-modal>
  </div>
</template>

<script>
import NavBar from "@/components/nav/navbar";
import API from "@/api/api-admin-cocineros";
import { SweetModal } from "sweet-modal-vue";

export default {
  data(){
    return{
      comandas:[
        {
        id_comanda_producto: 0,
        producto_id_platillo: 0,
        comanda_id_comanda: 0,
        cantidad: ""
        }
      ],
      comanda_detalle: {
        id_comanda_producto: 0,
        producto_id_platillo: 0,
        comanda_id_comanda: 0,
        cantidad: ""
      }
    }
  },
  components: {
    NavBar,
    SweetModal
  },
  methods: {
    get_comandas: async function(){
      const consulta = await API.cocineros.comandasProducto()
      this.comandas = consulta.data
    },
    reload : async function(){
      const consulta = await API.cocineros.comandasProducto()
      this.comandas = consulta.data
    },
    detalle_comanda_producto : async function(){
      this.$refs.modal_detalle.open();
    }
  },
    mounted() {
    this.get_comandas();
  }
};
</script>

<style>
h2 {
  width: 100% !important;
}

section {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.descripcion {
  min-height: 150px !important;
  max-height: 150px !important;
  overflow: scroll;
  overflow-x: hidden;
}

img.img-responsive {
  max-height: 150px !important;
  box-shadow: 0px 0px 10px rgb(25, 15, 5);
}

figure {
  justify-content: center !important;
  display: inline-flex;
}
</style>
