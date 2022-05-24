<template>
  <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
    <div class="card shadow my-3" style="width: 18rem">
      <figure>
        <img
          :src="post.image"
          class="card-img-top img-fluid"
          :alt="post.title"
        />
      </figure>
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <span>{{ updated_at }}</span>
        <div class="mt-3 text-end">
        <router-link
          class="btn btn-sm btn-primary text-light shadow"
          :to="{ name: 'post-detail', params: { id: post.id } }"
          ><i class="fa-solid fa-magnifying-glass"></i> Leggi
          l'articolo</router-link
        >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardFeed",
  props: ["post"],
  methods: {
    getImage(connectedUser) {
      return /storage/ + connectedUser;
    },
  },
  computed: {
    updated_at() {
      const date = new Date(this.post.updated_at);
      const day = date.getDate();
      const month = date.getMonth() + 1;
      const year = date.getFullYear();
      return `${day}/${month}/${year}`;
    },
  },
};
</script>

<style scoped lang="scss">
.card {
  border: 1px solid silver;
  figure {
    img {
      height: 150px;
      object-fit: cover;
      object-position: center;
    }
  }
  transition: transform 0.8s;
  &:hover {
    transform: translateY(-15px);
  }
}
</style>