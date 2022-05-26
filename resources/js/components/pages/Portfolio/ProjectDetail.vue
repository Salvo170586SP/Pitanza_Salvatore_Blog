<template>
  <section id="project-detail">
    <Loader v-if="isLoading" />
    <div v-else class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 my-3">
          <router-link class="btn text-light btn-primary" :to="{ name: 'home-portfolio' }"
            ><i class="fa-solid fa-arrow-left"></i
          > Torna al portfolio</router-link>
        </div>
        <div class="col-12 text-center">
          <img
            :src="/storage/ + project.img"
            :alt="project.title"
            class="img-fluid shadow border"
            width="70%"
          />
        </div>
        <div
          class="col-12 d-flex align-items-center justify-content-between py-3"
        >
          <h3>{{ project.title }}</h3>
          <p>
            Tecnologie utilizzate:
            <span
              :class="`badge shadow text-dark mx-1 bg-${language.color}`"
              v-for="language in project.languages"
              :key="language.id"
              >{{ language.name }}</span
            >
          </p>
        </div>
        <div class="col-12 py-3">
          <a class="btn btn-secondary" target="_blank" :href="project.url"><i class="fa-solid fa-cloud-arrow-down"></i> Scarica la repository</a>
        </div>
        <div class="col-12">
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
}
</style>