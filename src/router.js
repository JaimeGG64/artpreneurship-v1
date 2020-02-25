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
      meta: {
        title: 'Artpreneurship - Home',
      },
    },
    {
      path: '/about',
      name: 'about',
      meta: {
        title: 'About',
      },
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/awards',
      name: 'awards',
      meta: {
        title: 'Awards',
      },
      // route level code-splitting
      // this generates a separate chunk (awards.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "awards" */ './views/Awards.vue')
    },
    {
      path: '/business',
      name: 'business',
      meta: {
        title: 'Business',
      },
      // route level code-splitting
      // this generates a separate chunk (business.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "business" */ './views/Business.vue')
    },
    {
      path: '/collaborators',
      name: 'collaborators',
      meta: {
        title: 'Collaborators',
      },
      // route level code-splitting
      // this generates a separate chunk (collaborators.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "collaborators" */ './views/Collaborators.vue')
    },
    {
      path: '/sponsorship',
      name: 'sponsorship',
      meta: {
        title: 'Sponsorship',
      },
      // route level code-splitting
      // this generates a separate chunk (sponsorship.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "sponsorship" */ './views/Sponsorship.vue')
    }
  ]
})
