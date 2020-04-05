import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/awards',
      name: 'awards',
      // route level code-splitting
      // this generates a separate chunk (awards.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "awards" */ './views/Awards.vue')
    },
    {
      path: '/business',
      name: 'business',
      // route level code-splitting
      // this generates a separate chunk (business.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "business" */ './views/Business.vue')
    },
    {
      path: '/collaborators',
      name: 'collaborators',
      // route level code-splitting
      // this generates a separate chunk (collaborators.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "collaborators" */ './views/Collaborators.vue')
    },
    {
      path: '/sponsorship',
      name: 'sponsorship',
      // route level code-splitting
      // this generates a separate chunk (sponsorship.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "sponsorship" */ './views/Sponsorship.vue')
    },
  ],
  scrollBehavior() {
    return {x: 0, y: 0}
  }
})