<script setup>
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
  <slot></slot>
</template>