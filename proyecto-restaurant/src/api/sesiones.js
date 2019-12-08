import axios from 'axios'
import qs from "qs"

// const editar = (parametros) => axios.put(`ruta-editar`,qs.stringify({parametros : parametros}))
// const cosultar = () => axios.get(`ruta-consultar`)
// const cosultar = (parametro) => axios.get(`ruta-consultar2/${parametro}`)
// const añadir = (parametros) => axios.post(`ruta-añadir`,qs.stringify({parametros : parametros}))

const inicia_sesion = (usr, pass) => axios.post(`http://localhost:8001/inicio-sesion`,qs.stringify(
    {
        usuario : usr,
        contrasena : pass
    }
        ),
        {
            headers: {
                   "Access-Control-Allow-Origin": "*",
                   "Access-Control-Allow-Methods": "GET, POST, PATCH, PUT, DELETE, OPTIONS",
                   "Access-Control-Allow-Headers": "Origin, Content-Type, X-Auth-Token"
                 }
               })
const cierra_sesion = () => axios.post(`http://localhost:8001/cierre-sesion`)

export default {
    inicia_sesion,
    cierra_sesion
}