<script setup lang="ts">
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { usePostsStore } from '@/stores/posts'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const postsStore = usePostsStore()
const auth = useAuthStore()

const title = ref('')
const description = ref('')
const content = ref('')
const error = ref('')

async function handleCreate() {
  try {
    error.value = ''
    await postsStore.addPost({
      title: title.value,
      description: description.value,
      content: content.value,
      author: `/api/users/${auth.user?.id}`,
    })
    router.push('/')
  } catch (e) {
    error.value = 'Failed to create post'
  }
}
</script>

<template>
  <div class="mx-auto max-w-3xl p-6">
    <h1 class="codoc-gradient mb-6 text-2xl font-bold">Create a Codoc</h1>

    <p v-if="error" class="mb-4 text-red-500 dark:text-codoc-magenta">{{ error }}</p>

    <form @submit.prevent="handleCreate" class="space-y-4">
      <input v-model="title" type="text" placeholder="Title" required
        class="w-full rounded border border-gray-300 bg-white p-2 text-gray-900 outline-none focus:border-codoc-cyan dark:border-codoc-card dark:bg-codoc-dark dark:text-codoc-light" />

      <input v-model="description" type="text" placeholder="Short description" required
        class="w-full rounded border border-gray-300 bg-white p-2 text-gray-900 outline-none focus:border-codoc-cyan dark:border-codoc-card dark:bg-codoc-dark dark:text-codoc-light" />

      <textarea v-model="content" placeholder="Write your post content..." rows="10" required
        class="w-full rounded border border-gray-300 bg-white p-2 text-gray-900 outline-none focus:border-codoc-cyan dark:border-codoc-card dark:bg-codoc-dark dark:text-codoc-light"></textarea>

      <div class="flex gap-3">
        <RouterLink to="/" class="rounded bg-gray-200 px-6 py-2 text-gray-700 transition-colors hover:bg-gray-300 dark:bg-codoc-card dark:text-codoc-light dark:hover:bg-codoc-gray">
          Back
        </RouterLink>
        <button type="submit" class="rounded bg-codoc-cyan/80 px-6 py-2 font-semibold text-codoc-dark transition-colors hover:bg-codoc-cyan">
          Codoc
        </button>
      </div>
    </form>
  </div>
</template>
