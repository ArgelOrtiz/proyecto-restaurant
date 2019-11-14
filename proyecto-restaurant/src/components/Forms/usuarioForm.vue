<template>
  <div>
    <b-container>
      <b-row>
        <b-col  v-if = "show">
          <b-form @submit="onSubmit" @reset="onReset">
           <b-form-group
              id        = "usuarioNickGroup" 
              label     = "Ingresa nickname o correo" 
              label-for = "usuarioNick">
             <b-form-input 
               id       = "usuarioNick"
               v-model  = "usrForm.usuario"
               type     = "text"
               required>
             </b-form-input>
           </b-form-group>
           <b-form-group
              id        = "passGroup"
              label     = "Ingresa contraseña"
              label-for = "usrPass">
             <b-form-input
               id       = "usrPass"
               v-model  = "usrForm.contrasena"
               type     = "password"
               required>
             </b-form-input>
           </b-form-group>
           <b-form-group
              id        = "nombreGroup"
              label     = "Ingresa el nombre"
              label-for = "usrNombre">
             <b-form-input
               id       = "usrNombre"
               v-model  = "usrForm.nombre"
               type     = "text"
               required>
             </b-form-input>
           </b-form-group>
           <b-form-group
              id        = "apellidoGroup"
              label     = "Ingresa los apellidos"
              label-for = "usrApellido">
             <b-form-input
               id       = "usrApellido"
               v-model  = "usrForm.apellido"
               type     = "text"
               required>
             </b-form-input>
           </b-form-group>
           <b-form-group
              id        = "rolGroup"
              label     = "Rol:"
              label-for = "selectRol">
             <b-form-select
               id       = "selectRol"
               v-model  = "usrForm.rol"
               :options = "rol"
               required>
             </b-form-select>
           </b-form-group>
           <b-button 
              type      = "submit"
              variant   = "primary">
              Agregar
           </b-button>
           <b-button 
              type      = "reset"
              variant   = "danger">
              Limpiar
           </b-button>
         </b-form>
        </b-col>
      </b-row>
    </b-container>
    
  </div>
</template>

<script>
export default {
  data(){
    return {
      usrForm:{
        usuario    :   '',
        contrasena :   '',
        nombre     :   '',
        apellidos  :   '',
        rol        : null,

      },
      rol:  [{ text: 'Clic para deslegar roles', value: null}, "Usuario", "Administrador"],
      show: true
    }
  },
  methods: {
    onSubmit( evt ){
      evt.preventDefault()
      alert( JSON.stringify ( this.usrForm ) )
      //nomas pa ver
    },
    onReset( evt ){
      evt.preventDefault()
      this.usrForm.usuario    = ''
      this.usrForm.contrasena = ''
      this.usrForm.nombre     = ''
      this.usrForm.apellidos  = ''
      this.usrForm.rol        = null
//    this.show               = false
    }
  }
}
</script>

<style>

</style>