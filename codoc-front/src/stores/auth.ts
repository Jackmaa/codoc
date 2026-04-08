import { ref, computed } from 'vue'
import { defineStore } from 'pinia'
import { login as apiLogin, register as apiRegister, logout as apiLogout } from '@/api/auth'

// defineStore('auth') creates a global reactive store accessible from any component.
// This store manages the JWT token and the current user's auth state.
export const useAuthStore = defineStore('auth', () => {
  const token = ref<string | null>(localStorage.getItem('jwt'))

  const isAuthenticated = computed(() => !!token.value)

  // Decode the JWT payload to extract user info without a server call.
  // JWT structure: header.payload.signature — payload is base64-encoded JSON.
  const user = computed(() => {
    if (!token.value) return null
    try {
      const parts = token.value.split('.')
      if (parts.length < 3) return null
      const payload = JSON.parse(atob(parts[1]!))
      return { id: payload.id, email: payload.email, username: payload.username, roles: payload.roles }
    } catch {
      return null
    }
  })

  async function login(email: string, password: string) {
    const res = await apiLogin(email, password)
    token.value = res.token
    localStorage.setItem('jwt', res.token)
  }

  async function register(email: string, password: string, username: string) {
    await apiRegister(email, password, username)
  }

  function logout() {
    apiLogout()
    token.value = null
  }

  return { token, isAuthenticated, user, login, register, logout }
})
