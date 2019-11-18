<template>
  <div>
    <section class="probootstrap-section probootstrap-section-dark">
      <h2 class="mt0">Platillos</h2>
      <div class="container">
        <div class="row probootstrap-gutter10">
          <div v-for="(platillo, index) in productos" :key="index" class="col-md-4">
            <div class="probootstrap-block-image-text">
              <figure>
                <a :href="platillo.img_url" class="image-popup">
                  <img
                    :src="platillo.img_url"
                    :alt="platillo.nombre"
                    class="img-responsive"
                  />
                </a>
                <!-- <div class="actions">
                  <a href="https://vimeo.com/45830194" class="popup-vimeo">
                    <i class="icon-play2"></i>
                  </a>
                </div> -->
              </figure>
              <div class="text">
                <h3>
                  <a href="#">{{platillo.nombre}}</a>
                </h3>
                <div class="post-meta">
                  <ul>
                    <li>
                      <span class="review-rate">4.7</span>
                      <i class="icon-star"></i> 252 Pedidos
                    </li>
                    <li>
                      <i class="icon-user2"></i> {{platillo.stock}} En stock
                    </li>
                  </ul>
                </div>
                <p class="descripcion">{{platillo.descripcion}}</p>
                <p>
                  <a href="#" class="btn btn-warning">Editar</a>
                  <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-cta probootstrap-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a @click="$refs.modal.open('modal')" href="#" class="btn btn-primary">Nuevo platillo</a>
          </div>
        </div>
      </div>
    </section>
    <sweet-modal ref="modal" overlay-theme="dark" title="Nuevo platillo">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nombre_platillo">Nombre</label>
          <input
            v-model="info_nuevo_platillo.nombre"
            type="text"
            class="form-control"
            id="nombre_platillo"
            placeholder="Platillo"
          />
        </div>
        <div class="form-group col-md-2">
          <label for="precio-platillo">Precio</label>
          <input
            v-model="info_nuevo_platillo.precio"
            type="number"
            class="form-control"
            id="precio-platillo"
            placeholder="$ 0.00 MXN"
          />
        </div>
        <div class="form-group col-md-2">
          <label for="stock-platillo">Stock</label>
          <input
            v-model="info_nuevo_platillo.stock"
            type="number"
            class="form-control"
            id="stock-platillo"
            placeholder="Piezas o porciones"
          />
        </div>
      </div>
      <div class="form-group">
        <label for="descripcion-platillo">Descripción del platillo</label>
        <textarea
          v-model="info_nuevo_platillo.descripcion"
          class="form-control"
          id="descripcion-platillo"
          rows="3"
        ></textarea>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="platillo_imagen">Imagen del producto</label>
          <input type="file" class="form-control-file" id="platillo_imagen" />
        </div>
        <div class="form-check col-md-4">
          <input
            v-model="info_nuevo_platillo.status"
            class="form-check-input"
            type="checkbox"
            value
            id="check-status"
          />
          <label
            class="form-check-label"
            for="check-status"
            style="margin-left: 15px !important;"
          >¿Activo?</label>
        </div>
      </div>

      <button slot="button" class="btn btn-success">Aceptar</button>
      <button slot="button" class="btn btn-danger">Cancelar</button>
    </sweet-modal>
  </div>
</template>

<script>
import { SweetModal } from "sweet-modal-vue";

export default {
  data() {
    return {
      productos : [{
        id_platillo: 0,
        nombre: "",
        precio: 0,
        stock: 0,
        descripcion: "",
        status: false,
        img_url: "",
        imgObj: null
      }],
      info_nuevo_platillo: {
        id_platillo: 0,
        nombre: "",
        precio: 0,
        stock: 0,
        descripcion: "",
        status: false,
        img_url: "",
        imgObj: null
      }
    };
  },
  components: {
    SweetModal
  },
  props : {
    platillos : {
      type : Array,
      require : true
    }
  },
  watch: {
    platillos () {
      this.productos = this.platillos
    }
  },
  methods: {
    nuevo_producto: async function() {

    },
  },
  mounted() {
  }
};
</script>

<style scoped>
h2 {
  width: 100% !important;
}

section {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.descripcion{
  max-height: 190px !important;
  overflow: scroll;
  overflow-x : hidden;
}

img.img-responsive{
  max-height: 150px !important;
}
</style>