<template>
  <div id="home-proj">
    <Jumbotron />
    <SectionFeeds />
  </div>
</template>

<script>
import Jumbotron from "../Jumbotron.vue";
import SectionFeeds from "../SectionFeeds.vue";
export default {
  name: "HomePage",
  components: {
    Jumbotron,
    SectionFeeds,
  },
};
</script>

