<script setup lang="ts">
import { computed, onMounted } from 'vue'
import { usePostsStore } from '@/stores/posts'
import { useAuthStore } from '@/stores/auth'

const postsStore = usePostsStore()
const auth = useAuthStore()

onMounted(() => {
  postsStore.fetchPosts()
})

const myPosts = computed(() =>
  postsStore.posts.filter(p => p.author.email === auth.user?.email)
)
</script>

<template>
  <div class="mx-auto max-w-3xl p-6">
    <h1 class="codoc-gradient mb-2 text-2xl font-bold">
      What's up {{ auth.user?.username }}
    </h1>

    <h2 class="mb-4 text-lg text-codoc-gray">My Posts ({{ myPosts.length }})</h2>

    <p v-if="myPosts.length === 0" class="text-codoc-gray">You haven't written any posts yet.</p>

    <!-- Horizontal scrollable row like the original dashboard carousel -->
    <div class="flex gap-4 overflow-x-auto pb-4">
      <article
        v-for="post in myPosts"
        :key="post.id"
        class="min-w-[250px] flex-shrink-0 rounded border border-codoc-cyan/30 bg-codoc-card p-4"
      >
        <RouterLink :to="`/post/${post.id}`" class="font-semibold text-codoc-cyan hover:text-codoc-magenta">
          {{ post.title }}
        </RouterLink>
        <p class="mt-1 text-sm text-codoc-gray">{{ post.likedBy.length }} likes</p>
        <p class="mt-2 text-sm text-codoc-light/60">{{ post.description }}</p>
      </article>
    </div>
  </div>
</template>
