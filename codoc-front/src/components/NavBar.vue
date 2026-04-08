<script setup lang="ts">
  import { useAuthStore } from '@/stores/auth'
  import { useRouter } from 'vue-router'

  const auth = useAuthStore()
  const router = useRouter()

  function handleLogout() {
    auth.logout()
    router.push('/login')
  }
</script>

<template>
  <nav class="flex items-center justify-between border-b px-6 py-3">
    <RouterLink to="/" class="text-xl font-bold">Codoc</RouterLink>

    <div class="flex items-center gap-4">
      <!-- Conditional rendering based on auth state -->
      <template v-if="auth.isAuthenticated">
        <RouterLink to="/post/create" class="hover:underline">New post</RouterLink>
        <RouterLink to="/dashboard" class="hover:underline">Dashboard</RouterLink>
        <span class="text-sm text-gray-500">{{ auth.user?.username }}</span>
        <button @click="handleLogout" class="rounded bg-gray-200 px-3 py-1 hover:bg-gray-300">
          Logout
        </button>
      </template>

      <template v-else>
        <RouterLink to="/login" class="hover:underline">Login</RouterLink>
        <RouterLink to="/register" class="hover:underline">Register</RouterLink>
      </template>
    </div>
  </nav>
</template>
