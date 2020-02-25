import Vue from 'vue'
import App from './App.vue'
import router from './router'

Vue.config.productionTip = false

Vue.directive('title', {
  inserted: (el, binding) => document.title = binding.value,
  update: (el, binding) => document.title = binding.value,
})

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
