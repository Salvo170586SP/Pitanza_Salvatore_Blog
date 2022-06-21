<template>
  <div id="blog">
    <Header />
    <main>
      <router-view></router-view>
    </main>
    <Footer />
    <div v-if="toTop" id="top">
      <a href="#"><i class="fa-solid fa-circle-arrow-up fa-2x"></i></a>
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

        //se lo scroll arriva a 399
        if (Math.ceil(scrolled) > 399) {
          //aggiungo la classe show
          arrow.classList.add("show");
        }else if(Math.ceil(scrolled) < 399){
          //altrimenti se è minore tolgo la classe show
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
  height: 100vh;
  display: flex;
  flex-direction: column;
  main{
    padding-top: 65px;

    flex-grow: 1;
  }
  position: relative;
  #top {
    position: fixed;
    bottom: 0;
    right: 25px;
    filter: drop-shadow(0 0 5px black);
    z-index: 100000;
    transition: transform 1s, opacity 1s ;
    opacity: 0;
    a{
      color: white;
    }
&.show {
      opacity: 1;
      transform: translateY(-30px);
    }
  }
}
</style>
