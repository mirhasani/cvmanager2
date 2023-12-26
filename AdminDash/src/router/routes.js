
const routes = [
  {
    path: '/',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/DashboardPage.vue'),
      meta :{
        requireAuth :true,
      },
     },
    ],
  },
  {
    path: '/admin',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/LoginPage.vue') ,
      meta :{
        requireAuth :false,
        admin : true
      },
      },
    ],
  },
   {
    path: '/confirm',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/ConfirmPage.vue'),
      meta :{
        requireAuth :false,
        confirm : true
      },
     },
    ],
  },
   {
    path: '/admin/dashboard',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/DashboardPage.vue'),
      meta :{
        requireAuth :true,
      },
     },
    ],
  },
     {
    path: '/admin/contact',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/ContactPage.vue') }
    ]
  },
    {
    path: '/admin/resume',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/ResumePage.vue') }
    ]
  },
    {
    path: '/admin/profile',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/ProfilePage.vue') }
    ]
  },
     {
    path: '/admin/skils',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/SkilsPage.vue') }
    ]
  },
  {
    path: '/admin/work',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/WorkPage.vue') }
    ]
  },
     {
    path: '/admin/portfolio',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/PortfolioPage.vue') }
    ]
  },
     {
    path: '/admin/educations',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/EducationsPage.vue') }
    ]
  },
      {
    path: '/admin/biography',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/BiographyPage.vue') }
    ]
  },
       {
    path: '/admin/about',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/AboutPage.vue') }
    ]
  },
        {
    path: '/admin/settings',
    component: () => import('layouts/SecondLayout.vue'),
    children: [
      { path: '', component: () => import('src/pages/admin/SettingsPage.vue') }
    ]
  },


  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('src/pages/admin/ErrorNotFound.vue')
  }
]

export default routes
