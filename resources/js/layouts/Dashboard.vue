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
  <Sidebar />
  <Top />

  <slot name="header" />
  <slot name="body"></slot>
  <slot name="extra"></slot>
  
  <Footer />
</template>