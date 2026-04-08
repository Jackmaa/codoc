<script setup lang="ts">
import { onMounted } from 'vue'
import { usePostsStore } from '@/stores/posts'

const postsStore = usePostsStore()

onMounted(() => {
  postsStore.fetchPosts()
})
</script>

<template>
  <div class="mx-auto max-w-3xl p-6">
    <h1 class="codoc-gradient mb-6 text-3xl font-bold">Les derniers articles</h1>

    <p v-if="postsStore.posts.length === 0" class="text-gray-500 dark:text-codoc-gray">No posts yet.</p>

    <div class="post-list space-y-4">
      <article
        v-for="post in postsStore.posts"
        :key="post.id"
        class="post-card rounded border border-gray-200 bg-white p-6 dark:border-codoc-cyan/30 dark:bg-codoc-card"
      >
        <RouterLink :to="`/post/${post.id}`" class="text-xl font-semibold text-gray-900 hover:text-codoc-magenta dark:text-codoc-cyan">
          {{ post.title }}
        </RouterLink>
        <p class="mt-1 text-sm text-gray-500 dark:text-codoc-gray">
          {{ post.author.username }} · {{ post.likedBy.length }} likes
        </p>
        <p class="mt-2 text-gray-600 dark:text-codoc-light/80">{{ post.description }}</p>
        <div class="line-clamp-4 mt-2 text-sm text-gray-500 dark:text-codoc-light/60" v-html="post.content"></div>
        <div class="mt-4">
          <RouterLink :to="`/post/${post.id}`" class="text-codoc-cyan hover:text-codoc-magenta">
            Read →
          </RouterLink>
        </div>
      </article>
    </div>
  </div>
</template>
