<template>
  <div id="loader" class="d-flex align-items-center justify-content-center">
    <div class="spinner-grow" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Loader",
};
</script>

<style scoped lang="scss">
#loader{
    z-index: 100;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.575);
}
</style>