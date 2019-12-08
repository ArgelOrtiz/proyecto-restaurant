import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    session : false
  },
  mutations: {
    estado_sesion(state, is_logged){
      if(is_logged){
        state.session = true
      }else {
        state.session = false
      }
    }
  }
})
