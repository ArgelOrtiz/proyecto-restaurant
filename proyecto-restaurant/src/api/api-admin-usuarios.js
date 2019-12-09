import axios from 'axios'
import usuarios from './usuarios'

axios.defaults.baseURL                        = 'http://127.0.0.1:8002/' // BASE-URL API

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
  usuarios
};