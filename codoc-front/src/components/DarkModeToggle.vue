<script setup lang="ts">
import { useDarkMode } from '@/composables/useDarkMode'
import lightmodeIcon from '@/assets/icons/lightmode.svg'
import darkmodeIcon from '@/assets/icons/darkmode.svg'

const { darkMode, toggle } = useDarkMode()
</script>

<template>
  <button
    @click="toggle"
    class="rounded px-3 py-2 transition-colors hover:bg-codoc-card"
    aria-label="Toggle dark mode"
  >
    <img :src="darkMode ? lightmodeIcon : darkmodeIcon" alt="" class="w-5" />
  </button>
</template>
