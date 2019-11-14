<template>
  <div>
   <div>
    <b-container>
      <b-row>
        <b-col cols = "12" md = "auto">
          <h2>CRUD Usuarios</h2>
        </b-col>
      </b-row>
      <b-row>
        <b-col cols = "4" md = "auto">
         <b-button v-b-modal.modal-usr>Agregar</b-button>
        </b-col>
      </b-row>
    </b-container>
   </div>
    <div>
     <b-container>
       <b-table
         striped
         hover
         :items  = "registros"
         :fields = "columnas">
       </b-table>
      </b-container>
    </div>
    <modal-usr></modal-usr>
  </div>
</template>

<script>
import ModalUsr from '@/components/modal/modal-usuario';
export default {
  components : {
    ModalUsr
  },
  data(){
    return{
      columnas: [
        {
          key:       'id',
          label:     'ID',
          sortable: true
        },
        {
          key:  'usuario',
          label:'Usuario',
          sortable: true
        },
        {
          key:   'nombre',
          label: 'Nombre',
          sortable: true
        },
        {
          key:  'apellido',
          label:'Apellido',
          sortable: true
        },
        {
          key:  'estatus',
          label:    'Rol',
          sortable: true
        },
        {
          key:           'fechcrea',
          label:'Fecha de creación',
          sortable: true
        }
      ],
      registros:[
        { isActive: true, id: 10, usuario: 'Zodom'     , nombre: 'José Martín'    , apellido: 'Ruíz Coss'       , estatus: "Administrador", fechcrea: '2019-11-13 23:31:51' },
        { isActive: true, id: 14, usuario: 'Gosth-dark', nombre: 'Angel Christian', apellido: 'Álvarez Trujillo', estatus: "Administrador", fechcrea: '2019-11-14 17:06:52' },
        { isActive: true, id: 16, usuario: 'Superior'  , nombre: 'Aldo'           , apellido: 'Cardona Medina'  , estatus: "Administrador", fechcrea: '2019-11-11 11:13:16' },
        { isActive: true, id: 17, usuario: 'Glitch'    , nombre: 'Juan Silvestre' , apellido: 'Ramírez Becerra' , estatus: "Usuario      ", fechcrea: '2019-11-09 12:45:34' },
        { isActive: true, id: 19, usuario: 'Jimbo'     , nombre: 'Jaime'          , apellido: 'Bueno Esparza'   , estatus: "Usuario"      , fechcrea: '2019-11-07 09:37:26' },
        { isActive: true, id: 23, usuario: 'Jajargel'  , nombre: 'Argel'          , apellido: 'Ortiz Arenas'    , estatus: "Usuario"      , fechcrea: '2019-11-04 15:07:19' },
      ]
    }
  }
}
</script>

<style>

</style>