<template>
  <section id="projects" class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 py-4 text-center">
          <h2>Progetti realizzati</h2>
        </div>

        <div
          class="col-12 col-md-4 col-lg-3 d-flex justify-content-center"
          v-for="project in projects"
          :key="project.id"
        >
          <div class="card shadow my-3" style="width: 18rem">
            <figure>
              <img
                :src="/storage/ + project.img"
                class="card-img-top img-fluid shadow"
                :alt="project.title"
              />
            </figure>
            <div class="card-body">
              <h5 class="card-title text-muted fw-bold">{{ project.title }}</h5>
              <span v-for="language in project.languages" :key="language.id" :class="`badge shadow mx-1 bg-${language.color}`"> {{ language.name }} </span>
            </div>
              <div class="d-flex align-items-end p-3 text-end">
                <router-link :to="{ name: 'project-detail', params:{id: project.id} }"  class="btn btn-sm btn-primary text-light shadow"
                  ><i class="fa-solid fa-magnifying-glass"></i> Scopri i dettagli</router-link
                >
              </div>
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
.card{
      border: 1px solid lightgray;
}
</style>