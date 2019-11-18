import axios from 'axios'
import cocineros from './cocineros'

axios.defaults.baseURL = 'http://localhost:8000/' // BASE-URL API

axios.defaults.headers.common['Content-Type'] = 'application/x-www-form-urlencoded'
axios.defaults.headers.common.Accept = 'application/json'

axios.interceptors.request.use((request) => {
  return request;
}, error => Promise.reject(error));

axios.interceptors.response.use(response => {
  if(typeof response.data.is_declined !== 'undefined'){
    localStorage.removeItem('vuex')
    location.replace("/")
  }
  return response;

}, error =>
  Promise.reject(error),
);

export default {
    cocineros
};

// to use
// import API from "@/api/index";
// const detalles = await API.cocineros.cosultar();