import type { App } from 'vue';
import { createPageStackRouter } from 'vue-page-stack-router';
import { router } from '@/router';

export const pageStackRouter = createPageStackRouter({
  router,
});

export function setupPageStackRouter(app: App) {
  app.use(pageStackRouter);
}