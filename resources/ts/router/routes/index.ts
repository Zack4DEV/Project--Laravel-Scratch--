const routes = [
    { path: '/', redirect: '/admin/dashboard' ,
     component: () => import('@/components/Index.vue') 
    },
    {
    path: '/',redirect('/home'),
    component: () => import('@/components/User.vue') 
    },
    {
      path: '/admin/dashboard',
      component: () => import('@/components/Admin/Admin.vue'),
      children: [
        {
          redirect: '/admin/dashboard',
          component: () => import('@/components/Admin/Dashbaord.vue'),
        },
        {
          redirect: '/admin/roombook',
          component: () => import('@/components/Admin/Roombook.vue'),
        },
        {
          redirect: 'roombookedit',
          component: () => import('@/components/Admin/RoombookEdit.vue'),
        },
        {
          redirect: 'payment',
          component: () => import('@/components/Admin/Payment.vue'),
        },
        {
          redirect: 'invoice',
          component: () => import('@/components/Admin/Invoice.vue'),
        },
        {
          redirect: 'room',
          component: () => import('@/components/Admin/Room.vue'),
        },
        {
          redirect: 'staff',
          component: () => import('@/components/Admin/Staff.vue'),
        }
      ]},
     

  ]
  export default routes
