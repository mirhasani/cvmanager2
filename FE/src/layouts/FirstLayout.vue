<template >

  <q-layout view="hHh lpR fFf" dir="rtl">
    <q-header elevated class=" text-white z-top" height="150px">
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
        />
        <q-toolbar-title  >
          <q-tabs  >
            <q-route-tab to="/" label="خانه" />
            <q-route-tab to="#portfolio" label="نمونه کارها" />
            <q-route-tab to="#about" label="درباره ما" />
            <q-route-tab to="#contact" label="تماس با ما" />
            <q-route-tab to="#resume" label="دانلود رزومه" />
          </q-tabs>
        </q-toolbar-title>
        <div>CVManager 2023</div>
      </q-toolbar>
    </q-header>
    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script>
import { ref } from 'vue'

export default {
  // name: 'LayoutName',

  setup () {
    const leftDrawerOpen = ref(false)

    return {
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
}
</script>
