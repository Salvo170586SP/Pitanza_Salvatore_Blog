<template>
  <section id="post-detail">
    <Loader v-if="isLoading" />
    <div v-else class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 my-3">
          <router-link class="btn btn-secondary text-light shadow" :to="{name: 'home'}"><i class="fa-solid fa-house"></i> Torna alla home</router-link>
        </div>
        <div class="col-12 text-center">
            <img
              :src="post.image"
              class="img-fluid shadow border"
              :alt="post.title"
              width="70%"
            />
        </div>  
            <div class="col-12 d-flex align-items-center justify-content-between py-3">
              <h3>{{ post.title }}</h3>
              <p>Creato il: 
                <small class="text-muted">{{ updated_at }}</small>
              </p>
            </div>
           <div class="col-12">
         <p> {{ post.description }}</p>
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
  margin: 20px 0;
}
</style>