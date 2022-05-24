<template>
  <nav>
    <ul class="pagination">
      <li  @click="$emit('on-page-change', pagination.currentPage - 1)" class="page-item border-0" role="button" v-if="pagination.currentPage > 1">
        <span class="page-link">Previous</span>
      </li>
        <li class="page-item" role="button"  @click="$emit('on-page-change', page)" :class="{active: page === pagination.currentPage }" v-for="page in pagination.lastPage" :key="page">
            <span class="page-link">{{ page }}</span>
        </li>
      <li @click="$emit('on-page-change', pagination.currentPage + 1)" class="page-item" role="button" v-if="pagination.lastPage > pagination.currentPage">
        <span class="page-link">Next</span>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "Pagination",
  props: ['pagination'],
};
</script>

<style scoped lang="scss">
/* span{
     background-color: #2f343f;
}
.page-link{
    border: 1px solid darkslategray;
} */
</style>