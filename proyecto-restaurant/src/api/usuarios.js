import axios from 'axios'
import qs from "qs"

const usuarios         = ()             => axios.get ('get-usuarios');
const nuevo_usuario    = (info_usuario) => axios.post(`nuevo-usuario`   , qs.stringify({
      usuario: info_usuario
}))
const eliminar_usuario = (id_usuario)   => axios.post(`eliminar-usuario`, qs.stringify({
      id_usuario: id_usuario
}))
const editar_usuario   = (info_usuario) => axios.post(`editar-usuario`  , qs.stringify({
      usuairo: info_usuario
}))

export default {
  // editar,
  // cosultar,
  // añadir,
  usuarios        ,
  nuevo_usuario   ,
  eliminar_usuario,
  editar_usuario
}