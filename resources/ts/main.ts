/* eslint-disable import/order */
import App from './App.vue'
import router from './router'
import vuetify from 'vuetify'
import { createApp } from 'vue'
import { createI18n } from 'vue-i18n'
import lang from './lang'


loadFonts()


// Create vue app
const app = createApp(App)
const i18n = createI18n(lang)

// Use plugins
app.use(vuetify)
app.use(router)
app.use(i18n)

// Mount vue app
app.mount('#app')