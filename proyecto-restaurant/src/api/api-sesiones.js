import axios from 'axios'
import sesiones from './sesiones'

axios.defaults.baseURL                        = 'http://localhost:8001/' // BASE-URL API

axios.defaults.headers.common['Content-Type'] = 'application/x-www-form-urlencoded'
axios.defaults.headers.common.Accept          = 'application/json'

axios.interceptors.request.use((request) => {
  return request;
}, error => Promise.reject(error));

axios.interceptors.response.use(response => {
    if (typeof response.data.is_declined !== 'undefined') {
      localStorage.removeItem('vuex')
      location.replace("/")
    }
    return response;

  }, error =>
  Promise.reject(error),
);

export default {
    sesiones
};