<template>
  <div>
    <section class="probootstrap-section probootstrap-section-dark">
      <h2 class="mt0">Bebidas</h2>
      <div class="container">
        <div class="row probootstrap-gutter10">
          <div v-for="(platillo, index) in productos" :key="index" class="col-md-4">
            <div class="probootstrap-block-image-text">
              <figure>
                <a :href="platillo.img_url" class="image-popup">
                  <img :src="platillo.img_url" :alt="platillo.nombre" class="img-responsive" />
                </a>
                <!-- <div class="actions">
                  <a href="https://vimeo.com/45830194" class="popup-vimeo">
                    <i class="icon-play2"></i>
                  </a>
                </div>-->
              </figure>
              <div class="text">
                <h3>
                  <a href="#">{{platillo.nombre}}</a>
                </h3>
                <div class="post-meta">
                  <ul>
                    <li>
                      <span class="review-rate">${{platillo.precio}}</span>
                      <i class="icon-star"></i> 252 Pedidos
                    </li>
                    <li>
                      <i class="icon-user2"></i>
                      {{platillo.stock}} En stock
                    </li>
                  </ul>
                </div>
                <p class="descripcion">{{platillo.descripcion}}</p>
                <p>
                  <a class="btn btn-warning" @click="modal_edicion_producto(platillo)">Editar</a>
                  <a class="btn btn-danger" @click="eliminar_producto(platillo)">Eliminar</a>
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
            <a @click="$refs.modal.open('modal')" href="#" class="btn btn-primary">Nueva bebida</a>
          </div>
        </div>
      </div>
    </section>
    <sweet-modal ref="modal" overlay-theme="dark" title="Nueva bebida">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nombre_platillo">Nombre</label>
          <input
            v-model="info_nuevo_platillo.nombre"
            type="text"
            class="form-control"
            id="nombre_platillo"
            placeholder="Bebida"
          />
        </div>
        <div class="form-group col-md-2">
          <label for="precio-platillo">Precio</label>
          <input
            v-model.number="info_nuevo_platillo.precio"
            type="number"
            class="form-control"
            id="precio-platillo"
            placeholder="$ 0.00 MXN"
          />
        </div>
        <div class="form-group col-md-2">
          <label for="stock-platillo">Stock</label>
          <input
            v-model.number="info_nuevo_platillo.stock"
            type="number"
            class="form-control"
            id="stock-platillo"
            placeholder="Piezas o porciones"
          />
        </div>
      </div>
      <div class="form-group">
        <label for="descripcion-platillo">Descripción de la bebida</label>
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

      <button slot="button" class="btn btn-success" @click="nuevo_producto()">Aceptar</button>
      <button slot="button" class="btn btn-danger" @click="cancelar_edicion()">Cancelar</button>
    </sweet-modal>
    <sweet-modal ref="modal_edicion" overlay-theme="dark" title="Edicion de platillo">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nombre_platillo_edit">Nombre</label>
          <input
            v-model="info_edicion_platillo.nombre"
            type="text"
            class="form-control"
            id="nombre_platillo_edit"
            placeholder="Bebida"
          />
        </div>
        <div class="form-group col-md-2">
          <label for="precio-platillo_edit">Precio</label>
          <input
            v-model.number="info_edicion_platillo.precio"
            type="number"
            class="form-control"
            id="precio-platillo_edit"
            placeholder="$ 0.00 MXN"
          />
        </div>
        <div class="form-group col-md-2">
          <label for="stock-platillo_edit">Stock</label>
          <input
            v-model.number="info_edicion_platillo.stock"
            type="number"
            class="form-control"
            id="stock-platillo_edit"
            placeholder="Piezas o porciones"
          />
        </div>
      </div>
      <div class="form-group">
        <label for="descripcion-platillo_edit">Descripción de la bebida</label>
        <textarea
          v-model="info_edicion_platillo.descripcion"
          class="form-control"
          id="descripcion-platillo_edit"
          rows="3"
        ></textarea>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="platillo_imagen_edit">Imagen del producto</label>
          <input type="file" class="form-control-file" id="platillo_imagen_edit" />
        </div>
        <div class="form-check col-md-4">
          <input
            v-model="info_edicion_platillo.estatus"
            class="form-check-input"
            type="checkbox"
            value
            id="check-status-edit"
          />
          <label
            class="form-check-label"
            for="check-status-edit"
            style="margin-left: 15px !important;"
          >¿Activo?</label>
        </div>
      </div>
      <button slot="button" class="btn btn-success" @click="editar_producto()">Aceptar</button>
      <button slot="button" class="btn btn-danger" @click="cancelar_edicion()">Cancelar</button>
    </sweet-modal>
  </div>
</template>

<script>
import { SweetModal } from "sweet-modal-vue";
import API from "@/api/api-admin-cocineros";

export default {
  data() {
    return {
      productos: [
        {
          id_platillo: 0,
          nombre: "",
          precio: 0,
          stock: 0,
          descripcion: "",
          status: false,
          img_url: "",
          imgObj: null
        }
      ],
      info_nuevo_platillo: {
        id_platillo: 0,
        nombre: "",
        precio: 0,
        stock: 0,
        descripcion: "",
        status: false,
        img_url: "",
        imgObj: null
      },
      info_edicion_platillo: {
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
  props: {
    platillos: {
      type: Array,
      require: true
    }
  },
  watch: {
    platillos() {
      this.productos = this.platillos;
    }
  },
  methods: {
    nuevo_producto: async function() {
      var producto = {
        id_platillo: this.info_nuevo_platillo.id_platillo,
        nombre: this.info_nuevo_platillo.nombre,
        precio: this.info_nuevo_platillo.precio,
        stock: this.info_nuevo_platillo.stock,
        descripcion: this.info_nuevo_platillo.descripcion,
        status: status ? 1 : 0,
        img: "",
        imgObj: null,
        tipo: 2
      };

      const consulta = await API.cocineros.nuevo_producto(producto);

      if (consulta.data != "") {
        this.$refs.modal.close("modal");
        this.$emit("reload");
      }
    },
    cancelar_edicion() {
      this.info_nuevo_platillo = {
        id_platillo: 0,
        nombre: "",
        precio: 0,
        stock: 0,
        descripcion: "",
        status: false,
        img_url: "",
        imgObj: null
      };
      this.$refs.modal.close("modal");
    },
    eliminar_producto: async function(producto) {
      if (confirm("¿Eliminar el producto " + producto.nombre + "?")) {
        const consulta = await API.cocineros.eliminar_producto(
          producto.id_platillo
        );
        if (consulta != "") {
          window.console.log("eliminacion correcta");
          this.$emit("reload");
        }
      }
    },
    modal_edicion_producto: function(producto) {
      this.info_edicion_platillo = producto;
      this.info_edicion_platillo.estatus = producto.estatus == 1 ? true : false;
      this.$refs.modal_edicion.open();
    },
    editar_producto: async function() {
      var producto = {
        id_platillo: this.info_edicion_platillo.id_platillo,
        nombre: this.info_edicion_platillo.nombre,
        descripcion: this.info_edicion_platillo.descripcion,
        precio: this.info_edicion_platillo.precio,
        estatus: this.info_edicion_platillo.estatus ? 1 : 0,
        tipo: 2,
        img_url: this.info_edicion_platillo.img_url,
        stock: this.info_edicion_platillo.stock
      };

      const consulta = await API.cocineros.editar_producto(producto);

      if (consulta != "") {
        window.console.log(consulta.data);
        this.$emit('reload')
        this.$refs.modal_edicion.close();
      }
    }
  },
  mounted() {}
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