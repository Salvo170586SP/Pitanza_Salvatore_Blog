<template>
  <section class="container-fluid">
    <!-- Placeholder -->
    <div class="row g-5">
      <div
        v-for="(placeholder, i) in 8 "
        :key="i"
        class="col-sm-12 col-md-4 col-lg-3  d-flex justify-content-center"
      >
        <div class="card px-0" aria-hidden="true" style="width: 18rem">
          <figure>
          <svg
            class="bd-placeholder-img card-img-top"
            width="100%"
            height="380"
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            aria-label="Placeholder"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          >
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect>
          </svg>
          </figure>

          <div class="card-body">
            <h5 class="card-title placeholder-glow">
              <span class="placeholder col-6"></span>
            </h5>
            <p class="card-text placeholder-glow">
              <span class="placeholder col-7"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-6"></span>
              <span class="placeholder col-8"></span>
            </p>
            <a
              href="#"
              tabindex="-1"
              class="btn btn-primary disabled placeholder col-6"
            ></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "PlaceholderCard",
};
</script>

<style scoped lang="scss">
figure {
    svg {
      height: 150px;
      object-fit: cover;
      object-position: center;
    }
  }
</style>