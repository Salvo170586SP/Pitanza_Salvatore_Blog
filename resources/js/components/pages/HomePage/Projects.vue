<template>
  <section id="projects" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 py-4 text-center">
          <h2>Alcuni dei progetti realizzati</h2>
        </div>
        <div v-if="!projects.length" class="col-12 text-center py-3">
          <h4>Al momento non ci sono progetti caricati</h4>
        </div>
        <div
          v-else
          class="col-12 col-md-4 col-lg-3 d-flex justify-content-center"
          v-for="project in projects"
          :key="project.id"
        >
          <div class="card my-3" style="width: 18rem">
            <figure>
              <img
                v-if="project.img"
                :src="/storage/ + project.img"
                class="card-img-top img-fluid shadow"
                :alt="project.title"
              />
              <img
                v-else
                src="https://banksiafdn.com/wp-content/uploads/2019/10/placeholde-image.jpg"
                class="card-img-top img-fluid shadow"
                :alt="project.title"
              />
            </figure>
            <div class="card-body">
              <h5 class="card-title text-muted text-center py-2 fw-bold">
                {{ project.title }}
              </h5>
              <span
                v-for="language in project.languages"
                :key="language.id"
                :class="`badge  shadow text-light mx-1 bg-${language.color}`"
              >
                {{ language.name }}
              </span>
            </div>
            <router-link
              :to="{ name: 'project-detail', params: { id: project.id } }"
              class="btn btn-sm btn-secondary text-light fs-6 fw-bold py-2"
              ><i class="fa-solid fa-magnifying-glass"></i> Scopri i
              dettagli</router-link
            >
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Projects",
  data() {
    return {
      projects: [],
    };
  },
  methods: {
    getProjects() {
      axios
        .get("http://localhost:8000/api/projects")
        .then((res) => {
          this.projects = res.data;
          console.log(res.data);
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("chiamata terminata");
        });
    },
  },
  mounted() {
    this.getProjects();
  },
};
</script>

<style scoped lang="scss">
.card {
  border: 1px solid lightgray;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease-out;
  box-shadow: grey 0px 0px 25px -3px;
  &:hover {
    transform: translateY(-15px);
  }
  img {
    height: 150px;
    object-fit: cover;
    object-position: center;
  }
}
</style>