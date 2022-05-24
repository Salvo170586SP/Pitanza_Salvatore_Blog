<template>
  <div :class="`alert alert-${type || 'info'}`" role="alert">
    <div class="d-flex justify-content-between align-items-center">
      <div><slot></slot></div>
      <span v-if="dismissable" class="h4 m-0" role="button" @click="$emit('on-close')">&times;</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Alert",
  props: ["type", "dismissable"],
};
</script>

<style>
</style>