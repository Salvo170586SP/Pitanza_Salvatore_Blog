<template>
  <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
    <div class="card shadow my-3" style="width: 18rem">
      <figure>
        <img
          v-if="post.image"
          :src="post.image"
          class="card-img-top img-fluid shadow"
          :alt="post.title"
        />
        <img
          v-else
          src="https://banksiafdn.com/wp-content/uploads/2019/10/placeholde-image.jpg"
          class="card-img-top img-fluid shadow"
          :alt="post.title"
        />
      </figure>
      <div class="card-body">
        <h5 class="card-title text-muted text-center py-2 fw-bold">
          {{ post.title }}
        </h5>
      </div>
      <router-link
        :to="{ name: 'post-detail', params: { id: post.id } }"
        class="btn btn-sm btn-primary text-light fs-6 fw-bold py-2"
        ><i class="fa-solid fa-magnifying-glass"></i> Scopri i
        dettagli</router-link
      >
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
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.8s;

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