<template>
  <section id="feeds">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Ultime notizie</h2>
        </div>

        <div class="row" v-if="!isLoading">
          <div v-if="!this.posts.length" class="text-center">
            <h2>Non ci sono post</h2>
          </div>
          <Pagination v-else :pagination="pagination" @on-page-change="getPosts" />
          <CardFeed v-for="post in posts" :key="post.id" :post="post" />
        </div>
        <PlaceholderCard v-else />

        </div>
      </div>
    </div>
  </section>
</template>

<script>
import CardFeed from "./CardFeed.vue";
import PlaceholderCard from "./PlaceholderCard.vue";
import Pagination from "./Pagination.vue";


export default {
  name: "SectionFeeds",
  components: {
    CardFeed,
    PlaceholderCard,
    Pagination,
  },
  data() {
    return {
      posts: [],
      pagination: {},
      isLoading: false,
    };
  },
  methods: {
    getPosts(page = 1) {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/posts?page=" + page)
        .then((res) => {
          const { data, current_page, last_page } = res.data;

          this.posts = data;

          console.log(this.posts);

          this.pagination = {
            lastPage: last_page,
            currentPage: current_page,
          };
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
    this.getPosts();
  },
};
</script>

<style scoped lang="scss">
#feeds {
  padding-top: 50px;
}
</style>