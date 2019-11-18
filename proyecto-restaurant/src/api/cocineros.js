import axios from 'axios'
import qs from "qs"

// const editar = (parametros) => axios.put(`ruta-editar`,qs.stringify({parametros : parametros}))
// const cosultar = () => axios.get(`ruta-consultar`)
// const cosultar = (parametro) => axios.get(`ruta-consultar2/${parametro}`)
// const añadir = (parametros) => axios.post(`ruta-añadir`,qs.stringify({parametros : parametros}))

const productos = () => axios.get('get-productos');
const nuevo_producto = (info_producto) => axios.post(`nuevo-producto`,qs.stringify({producto : info_producto}))
const eliminar_producto = (id_producto) => axios.post(`eliminar-producto`,qs.stringify({id_producto : id_producto}))
const editar_producto = (info_producto) => axios.post(`editar-producto`,qs.stringify({producto : info_producto}))

export default {
    // editar,
    // cosultar,
    // añadir,
    productos,
    nuevo_producto,
    eliminar_producto,
    editar_producto
}