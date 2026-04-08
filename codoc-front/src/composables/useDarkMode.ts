import { ref, watchEffect } from 'vue'

// Reactive dark mode state persisted in localStorage.
// watchEffect auto-runs whenever darkMode.value changes,
// toggling the 'dark' class on <html> for Tailwind's dark: variant.
const darkMode = ref(localStorage.getItem('darkMode') === 'true')

watchEffect(() => {
  document.documentElement.classList.toggle('dark', darkMode.value)
  localStorage.setItem('darkMode', String(darkMode.value))
})

export function useDarkMode() {
  function toggle() {
    darkMode.value = !darkMode.value
  }

  return { darkMode, toggle }
}
