import Vue from 'vue'
import App from './App.vue'
import router from './router'
import titleMixin from './mixins/titleMixin'
import { BootstrapVue} from 'bootstrap-vue'
import Vuex from 'vuex'
import 'es6-promise/auto'

Vue.use(Vuex)
Vue.use(BootstrapVue)

Vue.config.productionTip = false
Vue.mixin(titleMixin);

const store = new Vuex.Store({
  state: {
    eventObjUrl: ''
  },

  mutations: {
    changeUrl (state, newEventObjUrl) {
      state.eventObjUrl = newEventObjUrl;
    },
  },

  actions: {
    changeUrl ({ commit } , eventPayload) {
      // eslint-disable-next-line
      return new Promise((resolve, reject) => {
        setTimeout(() => {
          commit('changeUrl', eventPayload);
          resolve()
        }, 100)
      })
    },
  },
})

new Vue({
  store,
  router,
  render: h => h(App)
}).$mount('#app')
