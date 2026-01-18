<script setup>
import ThemeSettings from '@/components/ThemeSettings.vue';
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
  <div class="page page-center">
    <slot></slot>
  </div>

  <ThemeSettings />
</template>