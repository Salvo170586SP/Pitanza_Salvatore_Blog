<template>
  <section id="project-detail">
    <Loader v-if="isLoading" />
    <div v-else class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 my-3">
          <router-link class="btn text-light btn-secondary" :to="{ name: 'home-portfolio' }"
            ><i class="fa-solid fa-arrow-left"></i
          > Torna al portfolio</router-link>
        </div>
        <div class="col-12 text-center">
          <img
          @click="clickImg"
            :src="/storage/ + project.img"
            :alt="project.title"
            class="img-fluid border"
            width="70%"
          />
          <figcaption>*clicca sull'immagine per ingrandire</figcaption>
        </div>
        <div
          class="col-12 d-flex align-items-center justify-content-between py-5"
        >
          <h3>{{ project.title }}</h3>
          <p>
            Tecnologie utilizzate:
            <span
              :class="`badge shadow text-light mx-1 bg-${language.color}`"
              v-for="language in project.languages"
              :key="language.id"
              >{{ language.name }}</span
            >
          </p>
        </div>
        <div class="col-12">
          <a class="btn btn-secondary" target="_blank" :href="project.url"><i class="fa-solid fa-cloud-arrow-down"></i> Scarica la repository</a>
        </div>
        <div class="col-12 py-5 fs-5">
         <p> {{ project.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Loader from "../../Loader.vue";
export default {
  name: "projectDetail",
  components: {
    Loader,
  },
  data() {
    return {
      project: [],
      isLoading: false,
    };
  },
  methods: {

    clickImg() {
      addEventListener("click", function (e) {
       /* e.target.classList.remove("active"); */  
        e.target.classList.toggle("active");

        // se clicco fuori riduco l'immagine
        this.window.addEventListener("click", function () {
          e.target.classList.toggle("active");
        }); 
      });
    },

    getProject() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/projects/" + this.$route.params.id)
        .then((res) => {
          this.project = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("connessione terminata");
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getProject();
  },
};
</script>

<style scoped lang="scss">
#project-detail {
  margin: 20px 0;
  height: 90vh;

  img{
    transition: 0.5s ease;
    cursor: pointer;
    &.active{
      transform: scale(1.5) translateY(35px);
      box-shadow:grey 1px 1px 20px 10px;
    }
  }
}
</style>