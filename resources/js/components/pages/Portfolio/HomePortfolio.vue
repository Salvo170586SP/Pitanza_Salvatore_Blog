<template>
<div>
  <Jumbotron />
  <Biograpy />
  <Skylls />
  <Projects />
</div>
</template>

<script>
import Jumbotron from './Jumbotron.vue';
import Biograpy from './Biograpy.vue';
import Skylls from './Skylls.vue';
import Projects from './Projects.vue';

export default {
  name: "HomePortfolio",
  components: {
    Jumbotron,
    Biograpy,
    Skylls,
    Projects
  }
};
</script>

<style scoped lang="scss">


</style>