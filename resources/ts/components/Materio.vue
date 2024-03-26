<template>
<VBtn
  color="error"
  class="materio-theme-selection"
  href="https://themeselection.com/item/materio-free-vuetify-vuejs-laravel-admin-template/"
  target="_blank"
  rel="noopener noreferrer"
>
  Materio Theme
  <VMenu
    open-on-hover
    activator="parent"
    offset="15"
    max-width="400px"
    :close-on-content-click="false"
    transition="slide-y-reverse-transition"
  >
    <VCard>
      <VImg src="https://cdn.jsdelivr.net/gh/themeselection/ts-assets/Materio/Materio-vuetify-vuejs-laravel-admin-template/banner/banner.png" />
      <VCardTitle>Materio - Vuetify Laravel Admin Template</VCardTitle>
      <VCardText>
        Materio Admin is the most developer friendly & highly customisable Admin Dashboard Template based on Vuetify.
      </VCardText>
      <VCardText>Click on below button to explore PRO version.</VCardText>
      <VCardText>
        <VBtn
          class="me-4"
          href="https://themeselection.com/item/materio-free-vuetify-vuejs-laravel-admin-template/?tab=details#details"
          target="_blank"
          rel="noopener noreferrer"
        >
          Demo
        </VBtn>
        <VBtn
          variant="outlined"
          href="https://themeselection.com/item/materio-free-vuetify-vuejs-laravel-admin-template/"
          target="_blank"
          rel="noopener noreferrer"
        >
          Download
        </VBtn>
      </VCardText>
    </VCard>
  </VMenu>
</VBtn>
  </template>

  <style lang="scss" scoped>
  .materio-theme-selection {
    position: fixed;

    // To keep upgrade to pro button on top of v-layout
    z-index: 999;
    inset-block-end: 5%;
    inset-inline-end: 79px;

    .v-application &.v-btn.v-btn--elevated {
      box-shadow: 0 1px 20px 1px rgb(var(--v-theme-error)) !important;

      &:hover {
        box-shadow: none !important;
      }
    }
  }
  </style>