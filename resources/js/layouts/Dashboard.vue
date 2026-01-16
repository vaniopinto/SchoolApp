<script setup>
import Footer from '@/components/Footer.vue';
import Sidebar from '@/components/Menus/Sidebar.vue';
import Top from '@/components/Menus/Top.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
  title: {
    type: String,
    default: 'School App',
  },
});
</script>

<template>
  <Head :title="title"></Head>

  <a href="#content" class="visually-hidden skip-link">Skip to main content</a>

  <div class="page">
    <Sidebar />
    <Top />

    <div class="page-wrapper">
      <slot name="header" />
      <slot name="body" />
      <slot name="extra" />
      
      <Footer />
    </div>
  </div>
</template>