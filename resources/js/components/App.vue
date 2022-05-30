<template>
  <div id="blog">
    <Header />
    <main>
      <router-view></router-view>
    </main>
    <Footer />
    <div v-if="toTop" id="top">
      <a href="#"><i class="fa-solid fa-circle-arrow-up fa-3x"></i></a>
    </div>
  </div>
</template>


<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
export default {
  name: "App",
  components: {
    Header,
    Footer,
  },
  methods: {
    toTop() {
      window.addEventListener("scroll", (e) => {
        const scrolled = window.scrollY;
        /* console.log('scrolled: ' + scrolled); */

        const arrow = document.getElementById("top");

        if (Math.ceil(scrolled) > 399) {
          arrow.classList.add("show");
        }
        if (Math.ceil(scrolled) < 399) {
          arrow.classList.remove("show");
        }
      });
    },
  },
  created() {
    this.toTop();
  },
};
</script>

<style scoped lang="scss">
#blog {
  position: relative;
  #top {
    position: fixed;
    bottom: 70px;
    right: 70px;
    z-index: 100000;
    display: none;
    &.show {
      display: block;
    }
  }
}
</style>
