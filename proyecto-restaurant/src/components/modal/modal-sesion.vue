<template>
  <div>
    <b-modal id="modal-1" title="Inicio de sesión">
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
      <template v-slot:modal-footer="{ ok, cancel, hide }">
        <!-- Emulate built in modal footer ok and cancel button actions -->
        <b-button size="sm" variant="success" >Aceptar</b-button>
        <b-button size="sm" variant="danger" >Cancel</b-button>
        
      </template>
    </b-modal>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>