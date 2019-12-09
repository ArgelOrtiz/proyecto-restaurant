<template>
  <div>
    <section class="probootstrap-section">
      <!-- contenido -->
      <div class="container">
        <div class="row">
          <b-col
            align="right"
            lg="12"
            class="pb-2"
          >
            <b-button
              @click="$refs.modal_insert.open('modal_insert')"
              href="#"
              variant="info"
              size="lg"
            >Agregar usuario</b-button>
          </b-col>
        </div>
      </div>
    </section>
    <!--DataTable-->
    <section class="probootstrap-section " style="background-image: url(/assets/dist/img/slider_2.jpg);">
      <div class="container">
        <div class="row">
          <b-col lg="12">
            <table class="table table-hover table-dark" style="border-radius:3px">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nickname</th>
                  <th scope="col">Contraseña</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Rol</th>
                  <th scope="col">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  v-for="(user,index) in users"
                  :key="index"
                >
                  <th scope="row">{{user.id_usuario}}</th>
                  <th>{{user.usuario}}</th>
                  <th>{{user.contrasena}}</th>
                  <th>{{user.nombre}}</th>
                  <th>{{user.apellido}}</th>
                  <th>{{user.tipo}}</th>
                  <button
                    slot="button"
                    class="btn btn-danger"
                    @click="eliminar_usuario(user)"
                  >Eliminar</button>
                  <button
                    align="left"
                    slot="button"
                    class="btn btn-warning"
                    @click="modal_edicion_usuario(user)"
                  >Editar</button>
                </tr>
              </tbody>
            </table>
          </b-col>
        </div>
      </div>

    </section>
    <!--Modals-->
    <!--Inserción-->
    <sweet-modal
      ref="modal_insert"
      overlay-theme="dark"
      title="Nuevo usuario"
    >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="usuario_nickname">Usuario o nickname</label>
          <input
            v-model="nuevo_usuario_data.usuario"
            type="text"
            class="form-control"
            id="usuario_nickname"
            placeholder="Ingresa nickname o alias"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="usuario_pass">Contraseña</label>
          <input
            v-model="nuevo_usuario_data.contrasena"
            type="password"
            class="form-control"
            id="usuario_pass"
            placeholder="Ingresa contraseña"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="usuario_nombre">Nombre</label>
          <input
            v-model="nuevo_usuario_data.nombre"
            type="text"
            class="form-control"
            id="usuario_nombre"
            placeholder="Ingresa tu nombre"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="usuario_apellidos">Apellidos</label>
          <input
            v-model="nuevo_usuario_data.apellido"
            type="text"
            class="form-control"
            id="usuario_apellidos"
            placeholder="Ingresa tu(s) apellido(s)"
          />
        </div>
      </div>
      <div class="form-row">
        <b-form-group
          id="rolGroup"
          label="Rol:"
          label-for="selectRol"
        >
          <b-form-select
            id="selectRol"
            v-model="nuevo_usuario_data.tipo"
            :options="rol"
            required
          >
          </b-form-select>
        </b-form-group>
        <div class="form-check col-md-4">
          <input
            v-model="nuevo_usuario_data.estatus"
            type="checkbox"
            class="form-check-input"
            value
            id="usuario_estatus"
          />
          <label
            class="form-check-label"
            for="usuario_estatus"
            style="margin-left: 15px !important;"
          >¿Activo?</label>
        </div>
      </div>
      <button
        slot="button"
        class="btn btn-success"
        @click="nuevo_usuario()"
      >Aceptar</button>
      <button
        slot="button"
        class="btn btn-danger"
        @click="cancelar_edicion()"
      >Cancelar</button>
      <button
        align="left"
        slot="button"
        class="btn btn-info"
        @click="resetModal()"
      >Limpiar</button>
    </sweet-modal>
    <!--Modificación-->
    <sweet-modal
      ref="modal_update"
      overlay-theme="dark"
      title="Editar usuario"
    >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="usuario_nickname_u">Usuario o nickname</label>
          <input
            v-model="edicion_usuario_data.usuario"
            type="text"
            class="form-control"
            id="usuario_nickname_u"
            placeholder="Ingresa nickname o alias"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="usuario_pass_u">Contraseña</label>
          <input
            v-model="edicion_usuario_data.contrasena"
            type="password"
            class="form-control"
            id="usuario_pass_u"
            placeholder="Ingresa contraseña"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="usuario_nombre_u">Nombre</label>
          <input
            v-model="edicion_usuario_data.nombre"
            type="text"
            class="form-control"
            id="usuario_nombre_u"
            placeholder="Ingresa tu nombre"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="usuario_apellidos_u">Apellidos</label>
          <input
            v-model="edicion_usuario_data.apellido"
            type="text"
            class="form-control"
            id="usuario_apellidos_u"
            placeholder="Ingresa tu(s) apellido(s)"
          />
        </div>
      </div>
      <div class="form-row">
        <b-form-group
          id="rolGroup"
          label="Rol:"
          label-for="selectRol_u"
        >
          <b-form-select
            id="selectRol_u"
            v-model="edicion_usuario_data.tipo"
            :options="rol"
            required
          >
          </b-form-select>
        </b-form-group>
        <div class="form-check col-md-4">
          <input
            v-model="edicion_usuario_data.estatus"
            type="checkbox"
            class="form-check-input"
            value
            id="usuario_estatus_u"
          />
          <label
            class="form-check-label"
            for="usuario_estatus_u"
            style="margin-left: 15px !important;"
          >¿Activo?</label>
        </div>
      </div>
      <button
        slot="button"
        class="btn btn-success"
        @click="editar_usuario()"
      >Aceptar</button>
      <button
        slot="button"
        class="btn btn-danger"
        @click="cancelar_edicion()"
      >Cancelar</button>
      <button
        align="left"
        slot="button"
        class="btn btn-info"
        @click="resetModal()"
      >Limpiar</button>
    </sweet-modal>
  </div>
</template>

<script>
import { SweetModal } from "sweet-modal-vue";
import API from "@/api/api-admin-usuarios";

export default {
  components: {
    SweetModal
  },
  data() {
    return {
      users: [
        {
          id_usuario: 0,
          usuario: "",
          contrasena: "",
          nombre: "",
          apellido: "",
          tipo: 0,
          estatus: false
        }
      ],
      nuevo_usuario_data: {
        id_usuario: 0,
        usuario: "",
        contrasena: "",
        nombre: "",
        apellido: "",
        tipo: 0,
        estatus: false
      },
      edicion_usuario_data: {
        id_usuario: 0,
        usuario: "",
        contrasena: "",
        nombre: "",
        apellido: "",
        tipo: 0,
        estatus: false
      },
      rol: [{ text: 'Clic para deslegar roles', value: null },
              "Mesero", "Cocinero", "Administrador"],
      show: true
    };
  },
  methods: {
    nuevo_usuario: async function () {

      let rol = this.nuevo_usuario_data.tipo;
      var tipoUsr = 0;
      switch (rol) {
        case "Mesero":
          tipoUsr = 1;
          break;
        case "Cocinero":
          tipoUsr = 2;
          break;
        case "Administrador":
          tipoUsr = 3;
          break;
        default:
          tipoUsr = 1;
          break;
      }


      var usr = {
        id_usuario: this.nuevo_usuario_data.id_usuario,
        usuario: this.nuevo_usuario_data.usuario,
        contrasena: this.nuevo_usuario_data.contrasena,
        nombre: this.nuevo_usuario_data.nombre,
        apellido: this.nuevo_usuario_data.apellido,
        tipo: tipoUsr,
        estatus: this.nuevo_usuario_data.estatus ? 1 : 0
      };

      const consulta = await API.usuarios.nuevo_usuario(usr);

      if (consulta.data != "") {
        this.$refs.modal_insert.close("modal_insert");
        this.$emit("reload");
      }
    },
    cancelar_edicion() {
      this.nuevo_usuario_data = {
        id_usuario: 0,
        usuario: "",
        contrasena: "",
        nombre: "",
        apellido: "",
        tipo: 0,
        estatus: false
      };
      this.$refs.modal_insert.close("modal_insert");
    },
    eliminar_usuario: async function (usuario) {
      if (confirm("¿Eliminar el usuario " + usuario.usuario + "?")) {
        const consulta = await API.usuarios.eliminar_usuario(usuario.id_usuario);
        if (consulta != "") {
          window.console.log("Eliminación correcta");
          this.$emit("reload");
        }
      }
    },
    modal_edicion_usuario: function (usuario) {
      this.edicion_usuario_data = usuario;
      this.$refs.modal_update.open();
    },
    editar_usuario: async function () {
      var usrEdit = {
        id_usuario: this.edicion_usuario_data.id_usuario,
        usuario: this.edicion_usuario_data.usuario,
        contrasena: this.edicion_usuario_data.contrasena,
        nombre: this.edicion_usuario_data.nombre,
        apellido: this.edicion_usuario_data.apellido,
        tipo: this.edicion_usuario_data.tipo,
        estatus: this.edicion_usuario_data.estatus
      };

      const consulta = await API.usuarios.editar_usuario(usrEdit);

      if (consulta != "") {
        window.console.log(consulta.data);
        this.$emit('reload')
        this.$refs.modal_update.close();
      }
    },
    resetModal() {
      this.nuevo_usuario_data = {
        id_usuario: 0,
        usuario: "",
        contrasena: "",
        nombre: "",
        apellido: "",
        tipo: 0,
        estatus: false
      };
    },
    pruebaDatos(evt) {
      evt.preventDefault()
      alert(JSON.stringify(this.nuevo_usuario_data))
      //nomas pa ver
    }
  },
  props: {
    usuarios: {
      type: Array,
      require: true
    }
  },
  watch: {
    usuarios() {
      this.users = this.usuarios;
    }
  },
}
</script>