<template>
  <section id="project-detail">
    <Loader v-if="isLoading" />
    <div v-else class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 my-3">
          <router-link class="btn btn-primary text-light" :to="{ name: 'home-portfolio' }"
            >Torna indietro</router-link
          >
        </div>
        <div class="col-12">
          <img
            :src="/storage/ + project.img"
            :alt="project.title"
            class="img-fluid"
          />
          <div class="d-flex align-items-center py-4">
            <h3 class="me-3">{{ project.title }}</h3>
            <p>
              Tecnologie utilizzate:
              <span
                :class="`badge shadow mx-1 bg-${language.color}`"
                v-for="language in project.languages"
                :key="language.id"
                >{{ language.name }}</span
              >
            </p>
          </div>
          <p>{{ project.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Loader from '../../Loader.vue';
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
  height: 70vh;
}
</style>