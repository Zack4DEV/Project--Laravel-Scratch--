<script setup lang="ts">
import { onMounted } from 'vue'
import { useTheme } from 'vuetify'
import Materio from '@/components/Materio.vue'
import { hexToRgb } from 'hex-rgb' 

  
const { global } = useTheme()
  
const showPageStack = import.meta.env.VITE_APP_PAGE_STACK === 'true';

const name = 'app'

onMounted(() => {
  console.log(`${name} onMounted`)
})

</script>

<template>
  <VApp :style="`--v-global-theme-primary: ${hexToRgb(global.current.value.colors.primary)}`">
    <RouterView />
    <UpgradeToPro />
  </VApp>
</template>