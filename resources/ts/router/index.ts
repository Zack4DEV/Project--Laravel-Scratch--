import type { App } from 'vue';
import { createRouter, createWebHashHistory } from 'vue-router';
import routes from './routes';
import { setupRouterGuard } from './guard';

export const router = createRouter({
  history: createWebHashHistory(),
  routes
});


export function setupRouter(app: App) {
  app.use(router);
  setupRouterGuard(router);
}