<template>
  <div class="locale-changer">
    <select v-model="locale" class="locale-changer-select">
      <option v-for="lang in availableLocales" :key="`locale-${lang}`" :value="lang">{{ t(lang) }}</option>
    </select>
  </div>
</template>

<script setup lang="ts">
import { watch, onMounted } from 'vue'     // {watch ,onMounetd ,computed }
import { useI18n } from 'vue-i18n'
// import { useAuthStore } from '@/views/page/auth/stores/auth.js'
// const store = useAuthStore()
const { t, locale, availableLocales } = useI18n({ useScope: 'global' })

onMounted(() => {
  // console.log('Current locale', locale.value, availableLocales)
})

watch(
  () => locale.value,
  (lang) => {
    console.log('Changed locale', lang)
    // Update server locale
    // store.changeLocale(lang)
  }
)

//const msg = computed(() => t(''))
</script>

<style scoped>
.locale-changer {
  float: right;
  width: auto;
  height: auto;
  border-radius: var(--border-radius);
  background: var(--bg-secondary);
  border: 1px solid var(--divider-primary);
}
.locale-changer-select {
  float: right;
  display: inline;
  padding: 5px;
  text-align: center;
  font-size: 1rem;
  cursor: pointer;	
  box-sizing: border-box;
  border-radius: var(--border-radius);
  background: var(--bg-secondary);
  border: 0px;
}
.locale-changer-select > * {
  background: var(--bg-secondary);
  color: var(--text-primary);
}
.locale-changer-select:focus {
  border: none;
  box-shadow: none;
}
</style>


<!--
// https://vue-i18n.intlify.dev/guide/advanced/composition.html#global-scope
// Add in main i18n options main.js

import { createI18n } from 'vue-i18n'

const lang = {
  // Allow compositions api (required)
  allowComposition: true,
  globalInjection: true,
  legacy: false,

  // Locales
  locale: 'en',
  fallbackLocale: 'en',
  availableLocales: ['en', 'pl'],
  messages: {
    en: { en: "English", pl: "Polish" },
    pl: { en: "Angielski", pl: "Polski" },
  },
}

const i18n = createI18n(lang)
app.use(i18n)
-->