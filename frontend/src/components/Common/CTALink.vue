<script setup lang="ts">
defineProps<{
  to: string
  text: string
}>()
</script>

<template>
  <router-link
    :to="{ name: to }"
    class="rounded-md border border-x-0 border-transparent bg-gradient-to-r from-indigo-500 to-indigo-700 py-3 px-4 font-medium text-white shadow hover:from-indigo-600 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
  >
    {{ text }}
  </router-link>
</template>
