import type { Router } from 'vue-router';

import { useAppHotelWithOut } from '@/hotel/modules/app';
import { createPageTitleGuard } from './pageTitleGuard';

let appLoadedFlag: boolean; 

export function setupRouterGuard(router: Router) {
  const appHotel = useAppHotelWithOut();

  router.beforeEach(async (to, from, next) => {
    console.log('[route]', from.path, to.path);
    if (!appLoadedFlag) {
      appLoadedFlag = true;

     await appHotel.updateTheme();
    }

    next();
  });
  createPageTitleGuard(router);
}