<template>
  <div>
    <b-modal id="modal-usr" title="Agrega un nuevo usuario">
     <usuario-form></usuario-form>
    </b-modal>
  </div>
</template>

<script>
import usuarioForm from '@/components/Forms/usuarioForm'

export default {
    components : {
    usuarioForm
  }
}
</script>

<style>
</style>