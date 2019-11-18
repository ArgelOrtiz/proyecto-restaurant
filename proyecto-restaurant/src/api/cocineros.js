import axios from 'axios'
// import qs from "qs"

// const editar = (parametros) => axios.put(`ruta-editar`,qs.stringify({parametros : parametros}))
// const cosultar = () => axios.get(`ruta-consultar`)
// const cosultar = (parametro) => axios.get(`ruta-consultar2/${parametro}`)
// const añadir = (parametros) => axios.post(`ruta-añadir`,qs.stringify({parametros : parametros}))

const productos = () => axios.get('get-productos');

export default {
    // editar,
    // cosultar,
    // añadir,
    productos
}