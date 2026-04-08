<script setup lang="ts">
import { onMounted, computed } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { usePostsStore } from '@/stores/posts'
import { useAuthStore } from '@/stores/auth'
import LikeButton from '@/components/LikeButton.vue'
import poubelleIcon from '@/assets/icons/poubelle.svg'

const route = useRoute()
const router = useRouter()
const postsStore = usePostsStore()
const auth = useAuthStore()

onMounted(() => {
  const id = Number(route.params.id)
  postsStore.fetchPost(id)
})

const isLiked = computed(() => {
  if (!postsStore.currentPost || !auth.user) return false
  return postsStore.currentPost.likedBy.some(u => u.id === auth.user?.id)
})

async function handleDelete() {
  if (!postsStore.currentPost) return
  await postsStore.removePost(postsStore.currentPost.id)
  router.push('/')
}
</script>

<template>
  <div class="mx-auto max-w-3xl p-6">
    <p v-if="!postsStore.currentPost" class="text-gray-500 dark:text-codoc-gray">Loading...</p>

    <article v-else>
      <h1 class="codoc-gradient text-3xl font-bold">{{ postsStore.currentPost.title }}</h1>

      <p class="mt-2 text-sm text-gray-500 dark:text-codoc-gray">
        By {{ postsStore.currentPost.author.username }}
        · {{ postsStore.currentPost.likedBy.length }} likes
      </p>

      <p class="mt-4 text-gray-600 dark:text-codoc-light/80">{{ postsStore.currentPost.description }}</p>

      <div class="mt-6 whitespace-pre-wrap text-gray-800 dark:text-codoc-light" v-html="postsStore.currentPost.content"></div>

      <div class="mt-6 flex gap-3">
        <LikeButton
          :post-id="postsStore.currentPost.id"
          :initial-count="postsStore.currentPost.likedBy.length"
          :initial-liked="isLiked"
        />

        <button
          v-if="auth.user?.email === postsStore.currentPost.author.email"
          @click="handleDelete"
          class="flex items-center gap-2 rounded bg-red-100 px-4 py-2 text-red-600 transition-colors hover:bg-red-200 dark:bg-codoc-magenta/20 dark:text-codoc-magenta dark:hover:bg-codoc-magenta/30"
        >
          <img :src="poubelleIcon" alt="" class="w-5" />
          Delete
        </button>
      </div>

      <RouterLink to="/" class="mt-6 inline-block text-codoc-cyan hover:text-codoc-magenta">
        ← Back to posts
      </RouterLink>
    </article>
  </div>
</template>
