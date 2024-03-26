/* eslint-disable import/order */
import App from '@/App.vue'
import router from '@/router'
import vuetify from 'vuetify'
import { createApp } from 'vue'

loadFonts()

// Create vue app
const app = createApp(App)

// Use plugins
app.use(vuetify)
app.use(router)

// Mount vue app
app.mount('#app')