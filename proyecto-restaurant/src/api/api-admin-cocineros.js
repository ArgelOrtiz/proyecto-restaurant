import axios from 'axios'
import cocineros from './login'

axios.defaults.baseURL = 'http://localhost/' // BASE-URL API

axios.defaults.headers.common['Content-Type'] = 'application/x-www-form-urlencoded'
axios.defaults.headers.common.Accept = 'application/json'

export default {
    cocineros
};

// to use
// import API from "@/api/index";
// const detalles = await API.cocineros.cosultar();