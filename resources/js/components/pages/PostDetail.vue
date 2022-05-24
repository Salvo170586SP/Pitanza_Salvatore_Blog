<template>
  <section id="post-detail">
    <Loader v-if="isLoading" />
    <div v-else class="container h-100">
      <div class="row h-100 align-items-center pt-5">
        <div class="col-12 d-flex align-items-center justify-content-between">
          <h2>Post detail</h2>
          <router-link class="btn btn-primary text-light shadow" :to="{name: 'home'}"><i class="fa-solid fa-house"></i> Torna alla home</router-link>
        </div>
        <div class="col-12">
          <div class="card shadow mb-3">
            <img
              :src="post.image"
              class="card-img-top"
              :alt="post.title"
              height="500"
            />
            <div class="card-body">
              <h5 class="card-title">{{ post.title }}</h5>
              <p class="card-text">{{ post.description }}</p>
              <p class="card-text">
                <small class="text-muted">{{ updated_at }}</small>
              </p>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>
</template>

<script>
import Loader from '../Loader.vue';
export default {
  name: "PostDetail",
  components:{
    Loader
  },
  data() {
    return {
      post: [],
      isLoading: false,
    };
  },
  methods: {
    
    getImage(connectedUser) {
      return /storage/ + connectedUser;
    },
    getPost() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/posts/" + this.$route.params.id)
        .then((res) => {
           this.post = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("chiamata terminata");
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getPost();
  },
  computed: {
    updated_at(){
      const date = new Date(this.post.updated_at);
      const day = date.getDate();
      const month = date.getMonth() + 1;
      const year = date.getFullYear();
      return `${day}/${month}/${year}`;
    },
  }
};
</script>

<style scoped lang="scss">
#post-detail {
   height: 70vh;
  img {
    object-fit: cover;
    object-position: center;
  }
}
</style>