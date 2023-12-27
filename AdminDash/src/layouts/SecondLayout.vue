
  <template>
  <q-layout view="lHh Lpr lFf " dir=rtl >
    <q-header elevated >
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />

          <q-toolbar-title>
         داشبورد مدیریت
          </q-toolbar-title>

          <div>CVManager 2023</div>
        </q-toolbar>
      </q-header>

      <q-drawer
        v-model="leftDrawerOpen"
        show-if-above
        bordered
      >
        <q-list >
          <q-item-label
            header
          >
  <h5>   افزودن اطلاعات </h5>

     </q-item-label>

          <EssentialLink
            v-for="link in essentialLinks"
            :key="link.title"
            v-bind="link"
          />
        </q-list>
      </q-drawer>

      <q-page-container>
        <router-view />
      </q-page-container>
    </q-layout>
  </template>


  <script>
  import { defineComponent, ref } from 'vue'
  import EssentialLink from 'components/EssentialLink.vue'

  const linksList = [
    {
      title: 'داشبورت',
      icon: 'dashboard',
      link:'/#/admin/dashboard'

    },
    {
      title: 'پروفایل',
      icon: 'person',
      link: '/#/admin/profile'

    },

      {
      title: 'مهارت ها',
      icon: 'code',
      link: '/#/admin/skils'
    },

    {
      title: ' تجربه کاری',
      icon: 'work',
      link: '/#/admin/work'
    },
    {
      title: 'نمونه کارها',
      icon: 'collections',
      link: '/#/admin/portfolio'
    },

    {
      title: 'تحصیلات',
      icon: 'school',
      link: '/#/admin/educations'
    },
     {
      title: 'اطلاعات تماس',
      icon: 'call',
      link: '/#/admin/contact'
    },
    {
      title: 'رزومه',
      icon: 'download',
      link: '/#/admin/resume'
    },
    {
      title: 'بیوگرافی',
      icon: 'info',
      link: '/#/admin/biography'
    },

       {
      title: ' درباره ما',
       icon: 'help',
      link: '/#/admin/about'
    },
     {
      title: 'تنظیمات',
      icon: 'settings',
      link: '/#/admin/settings'
    },


   ]

  export default defineComponent({
    // name: 'MainLayout',

    components: {
      EssentialLink
    },

    setup () {
      const leftDrawerOpen = ref(false)

      return {
        essentialLinks: linksList,
        leftDrawerOpen,
        toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
        }
      }
    }
  })
  </script>
