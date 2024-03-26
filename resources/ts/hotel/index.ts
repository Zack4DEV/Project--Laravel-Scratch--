import { createPinia } from 'pinia';
import type { App } from 'vue';

export const hotel = createPinia();

export function setupHotel(app: App) {
  app.use(hotel);
}