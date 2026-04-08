<script setup lang="ts">
import { ref } from 'vue'
import { toggleLike } from '@/api/posts'
import { useAuthStore } from '@/stores/auth'
import coeurIcon from '@/assets/icons/coeur.svg'
import coeurpleinIcon from '@/assets/icons/coeurplein.svg'

const props = defineProps<{
  postId: number
  initialCount: number
  initialLiked: boolean
}>()

const emit = defineEmits<{
  toggled: [liked: boolean, totalLikes: number]
}>()

const auth = useAuthStore()
const liked = ref(props.initialLiked)
const count = ref(props.initialCount)

async function handleToggle() {
  const res = await toggleLike(props.postId)
  liked.value = res.liked
  count.value = res.totalLikes
  emit('toggled', res.liked, res.totalLikes)
}
</script>

<template>
  <button
    v-if="auth.isAuthenticated"
    @click="handleToggle"
    class="flex items-center gap-2 rounded px-4 py-2 transition-all"
    :class="liked
      ? 'bg-codoc-magenta/20 text-codoc-magenta shadow-[0_0_12px_rgba(248,9,176,0.3)]'
      : 'bg-codoc-card text-codoc-cyan'"
  >
    <img :src="liked ? coeurpleinIcon : coeurIcon" alt="" class="w-5" />
    {{ count }}
  </button>
  <span v-else class="flex items-center gap-2 text-sm text-codoc-gray">
    <img :src="coeurIcon" alt="" class="w-4" />
    {{ count }}
  </span>
</template>
