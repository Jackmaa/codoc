<script setup lang="ts">
import { onMounted } from 'vue'
import { usePostsStore } from '@/stores/posts'
import LikeButton from '@/components/LikeButton.vue'
import { useAuthStore } from '@/stores/auth'
import randomIcon from '@/assets/icons/random.svg'

const postsStore = usePostsStore()
const auth = useAuthStore()

function loadRandom() {
  postsStore.fetchRandomPost()
}

onMounted(loadRandom)
</script>

<template>
  <div class="mx-auto max-w-3xl p-6">
    <p v-if="!postsStore.currentPost" class="text-codoc-gray">Loading...</p>

    <article v-else>
      <h1 class="codoc-gradient text-3xl font-bold">{{ postsStore.currentPost.title }}</h1>

      <p class="mt-2 text-sm text-codoc-gray">
        By {{ postsStore.currentPost.author.username }}
      </p>

      <p class="mt-4 text-codoc-light/80">{{ postsStore.currentPost.description }}</p>

      <div class="mt-6 whitespace-pre-wrap text-codoc-light" v-html="postsStore.currentPost.content"></div>

      <div class="mt-6 flex gap-3">
        <LikeButton
          v-if="auth.isAuthenticated"
          :post-id="postsStore.currentPost.id"
          :initial-count="postsStore.currentPost.likedBy.length"
          :initial-liked="false"
        />

        <button
          @click="loadRandom"
          class="flex items-center gap-2 rounded bg-codoc-card px-4 py-2 text-codoc-cyan transition-colors hover:bg-codoc-gray"
        >
          <img :src="randomIcon" alt="" class="w-5" />
          Another one
        </button>
      </div>

      <RouterLink to="/" class="mt-6 inline-block text-codoc-cyan hover:text-codoc-magenta">
        ← Back to posts
      </RouterLink>
    </article>
  </div>
</template>
