import { createRouter, createWebHistory } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

import HomeView from '@/views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { path: '/', component: HomeView },
    { path: '/random', component: () => import('@/views/RandomView.vue') },
    { path: '/post/:id', component: () => import('@/views/PostView.vue') },
    {
      path: '/post/create',
      component: () => import('@/views/CreatePostView.vue'),
      meta: { requiresAuth: true },
    },
    { path: '/login', component: () => import('@/views/LoginView.vue') },
    { path: '/register', component: () => import('@/views/RegisterView.vue') },
    {
      path: '/dashboard',
      component: () => import('@/views/DashboardView.vue'),
      meta: { requiresAuth: true },
    },
    { path: '/:pathMatch(.*)*', component: () => import('@/views/NotFoundView.vue') },
  ],
})

// Navigation guard — runs before every route change.
// If the target route has meta.requiresAuth and the user isn't logged in,
// redirect to /login instead.
router.beforeEach((to) => {
  const auth = useAuthStore()
  if (to.meta.requiresAuth && !auth.isAuthenticated) {
    return '/login'
  }
})

export default router
