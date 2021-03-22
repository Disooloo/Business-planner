import Vue from 'vue'
import Router from 'vue-router'
import firebase from 'firebase/app'

Vue.use(Router)

const router = new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/main',
      name: 'main',
      meta: {layout: 'main'},
      component: () => import('./views/main.vue') 
    },
    {
      path: '/login',
      name: 'login',
      meta: {layout: 'empty'},
      component: () => import('./views/Login.vue')
    },
    {
      path: '/register',
      name: 'register',
      meta: {layout: 'empty'},
      component: () => import('./views/Register.vue')
    },
    {
      path: '/',
      name: 'home',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Home.vue')
    },
    {
      path: '/other',
      name: 'Other',
      meta: {layout: 'main', auth:true},
      component: () => import('./views/other.vue') 
    },
    {
      path: '/tools',
      name: 'Tools',
      meta: {layout: 'main', auth: true},
      component:() => import('./views/Tools.vue')
    }, 
    {
      path: '/calendar',
      name: 'Calendar',
      meta: {layout: 'main', auth: true},
      component:() => import('./components/calendar.vue')
    },
    {
      path: '/QRcode',
      name: 'QRcode',
      meta: {layout: 'main'},
      component: () => import('./components/other/QRcode.vue')
        //
    },
    {
      path: '/categories',
      name: 'categories',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Categories.vue')
    },
    {
      path: '/create',
      name: 'Create',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Create.vue')
    },
    {
      path: '/control',
      name: 'Control',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Control.vue')
    },
    {
      path: '/detail/:id',
      name: 'detail',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Detail.vue')
    },
    {
      path: '/history',
      name: 'history',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/History.vue')
    },
    {
      path: '/planning',
      name: 'planning',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Planning.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Profile.vue')
    },
    {
      path: '/record',
      name: 'record',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Record.vue')
    },
    {
      path: '/worker',
      name: "Worker",
      meta: {layout: 'main', auth: true},
      component: () => import ('./views/Worker.vue')
    },
    {
      path: '/clients',
      name: 'Clients',
      meta: {layout: 'main', auth: true},
      component: () => import('./views/Clients.vue')
    },
  ]
})

router.beforeEach((to, from, next) => {
  const currentUser = firebase.auth().currentUser
  const requireAuth = to.matched.some(record => record.meta.auth)

  if (requireAuth && !currentUser) {
    next('/login?message=login')
  } else {
    next()
  }
})


export default router
