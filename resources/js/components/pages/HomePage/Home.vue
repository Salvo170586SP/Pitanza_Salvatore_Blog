<template>
<div>
  <Jumbotron />
  <Bio />
  <Skylls />
  <Projects />
  <CVitae />
  <Follow />
</div>
</template>

<script>
import Jumbotron from './Jumbotron.vue';
import Bio from './Bio.vue';
import Skylls from './Skylls.vue';
import CVitae from './CVitae.vue';
import Projects from './Projects.vue';
import Follow from './Follow.vue';

export default {
  name: "Home",
  components: {
    Jumbotron,
    Bio,
    Skylls,
    Projects,
    CVitae,
    Follow
  }
};
</script>

<style scoped lang="scss">


</style>