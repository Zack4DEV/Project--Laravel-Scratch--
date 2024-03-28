<script setup lang="ts">
import { onMounted } from 'vue'
import { useI18n } from 'vue-i18n'
import { useRoute } from 'vue-router'
import { useStore } from ''
  
const showPageStack = import.meta.env.VITE_APP_PAGE_STACK === 'true';

const name = 'app'

onMounted(() => {
  console.log(`${name} onMounted`)
})

</script>

<template>
  
</template>