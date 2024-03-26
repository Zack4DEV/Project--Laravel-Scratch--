const routes = [
    { path: '/', redirect: '/admin/dashboard' },
    {
      path: '/',
      component: () => import('../../components/Admin/Admin.vue'),
      children: [
        {
          path: 'dashboard',
          component: () => import('../../components/Admin/Dashbaord.vue'),
        },
        {
          path: 'account-settings',
          component: () => import('../../components/Admin/Roombook.vue'),
        },
        {
          path: 'typography',
          component: () => import('../../components/Admin/RoombookEdit.vue'),
        },
        {
          path: 'icons',
          component: () => import('../../components/Admin/Payment.vue'),
        },
        {
          path: 'form-layouts',
          component: () => import('../../components/Admin/Invoice.vue'),
        },
        {
          path: 'cards',
          component: () => import('../../components/Admin/Room.vue'),
        },
        {
          path: 'tables',
          component: () => import('../../components/Admin/Staff.vue'),
        }
      ],
      ,
      {
            path: '/',
            component: () => import('../../components/Index.vue'),
            children: [
            ],
          },
      {
          path: '/home',
          component: () => import('../../components/User.vue'),
          children: [
          ],
        },
        ],

  export default routes