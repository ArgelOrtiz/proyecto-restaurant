<template>
  <div>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <b-col lg="12">
            <b-table>

            </b-table>
          </b-col>
        </div>
      </div>

    </section>
    <!--Modals-->
    <sweet-modal
      ref="modal"
      overlay-theme="dark"
      title="Nuevo platillo"
    >
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="usuario_nickname">Usuario o nickname</label>
          <input
            v-model="nuevo_usuario_data.usuario"
            type="text"
            class="form-control"
            id="usuario_nickname"
            placeholder="Ingresa nickname o alias"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
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
        <div class="form-group col-md-8">
          <label for="usuario_nombre">Nombre</label>
          <input
            v-model="nuevo_usuario_data.nombre"
            type="text"
            class="form-control"
            id="usuario_nombre"
            placeholder="Ingresa tu nombre"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="usuario_apellidos">Apellidos</label>
          <input
            v-model="nuevo_usuario_data.apellido"
            type="text"
            class="form-control"
            id="usuario_apellidos"
            placeholder="Ingresa tu(s) apellido(s)"
          />
        </div>
        <div class="form-check col-md-4">
          <label
            class="form-check-label"
            for="usuario_estatus"
            style="margin-left: 15px !important;"
          >¿Activo?</label>
          <input
            v-model="nuevo_usuario_data.estatus"
            type="checkbox"
            class="form-check-input"
            value
            id="usuario_estatus"
          />
        </div>
        <div class="form-row">
          <b-form-group
            id="rolGroup"
            label="Rol:"
            label-for="selectRol"
          >
            <b-form-select
              id="selectRol"
              v-model="usrForm.rol"
              :options="rol"
              required
            >
            </b-form-select>
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
    </sweet-modal>
</template>

<script>
import { SweetModal } from "sweet-modal-vue";

export default {
  components: {
    SweetModal
  },
  data() {
    return {
      usuarios: [
        {
          id_usuario = 0,
          usuario    = "",
          contrasena = "",
          nombre     = "",
          apellido   = "",
          estatus    = false
        }
      ],
      nuevo_usuario_data: {
        id_usuario = 0,
        usuario    = "",
        contrasena = "",
        nombre     = "",
        apellido   = "",
        estatus    = false
      },
      edicion_usuario_data: {
        id_usuario = 0,
        usuario    = "",
        contrasena = "",
        nombre     = "",
        apellido   = "",
        estatus    = false
      },
      rol: [{ text: 'Clic para deslegar roles', value: null }, "Usuario", "Administrador"],
      show: true
    };
  },
  props: {
    usuarios: {
      type: Array,
      require: true
    }
  },
  watch: {

  },
}
</script>