import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { setupPageStackRouter } from './router/pageStack';
import { setupHotel } from './hotel';
import lang from './lang'
import { createI18n } from 'vue-i18n'


loadFonts()


// Create vue app
const app = createApp(App)
const i18n = createI18n(app)

// Use plugins
router(app)
setupHotel(app)

// Mount vue app
app.mount('#app')