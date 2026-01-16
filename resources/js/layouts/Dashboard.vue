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
  Menu Lateral <br>
  Menu do Topo <br>
  <slot name="header" />
  <slot></slot>
  <slot name="extra"></slot>
  Rodapé<br>
</template>