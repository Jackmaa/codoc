<script setup lang="ts">
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const auth = useAuthStore()
const router = useRouter()

const email = ref('')
const password = ref('')
const error = ref('')

async function handleLogin() {
  try {
    error.value = ''
    await auth.login(email.value, password.value)
    router.push('/')
  } catch (e) {
    error.value = 'Invalid credentials'
  }
}
</script>

<template>
  <div class="flex min-h-screen items-center justify-center">
    <form @submit.prevent="handleLogin" class="w-full max-w-sm space-y-4">
      <h1 class="codoc-gradient text-2xl font-bold">Login</h1>

      <p v-if="error" class="text-red-500 dark:text-codoc-magenta">{{ error }}</p>

      <input v-model="email" type="email" placeholder="example@codoc.com" required
        class="w-full rounded border border-gray-300 bg-white p-2 text-gray-900 outline-none focus:border-codoc-cyan dark:border-codoc-card dark:bg-codoc-dark dark:text-codoc-light" />

      <input v-model="password" type="password" placeholder="********" required
        class="w-full rounded border border-gray-300 bg-white p-2 text-gray-900 outline-none focus:border-codoc-cyan dark:border-codoc-card dark:bg-codoc-dark dark:text-codoc-light" />

      <button type="submit" class="w-full rounded bg-codoc-cyan/80 p-2 font-semibold text-codoc-dark transition-colors hover:bg-codoc-cyan">
        Sign in
      </button>

      <p class="text-center text-sm text-gray-500 dark:text-codoc-gray">
        Don't have an account? <RouterLink to="/register" class="text-codoc-cyan hover:text-codoc-magenta">Register</RouterLink>
      </p>
    </form>
  </div>
</template>
