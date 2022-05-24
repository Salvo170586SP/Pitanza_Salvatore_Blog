<template>
  <section id="jumbotron">
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center">
        <div class="col-6 text-center text-light z-i">
          <h1>FullStack Blog</h1>
          <p>Notizie e novità dal mondo informatico</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Jumbotron",
};
</script>

<style scoped lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Anton&family=Satisfy&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap");
#jumbotron {
  font-family: "Anton", sans-serif;
  font-family: "Satisfy", cursive;
  font-family: "Ubuntu", sans-serif;
  height: 50vh;
  background-image: url("https://mir-s3-cdn-cf.behance.net/project_modules/fs/17a41184926617.5d6cdaf884aa9.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
  &::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.74);
  }
  .z-i{
    z-index: 1;
  }
  h1 {
    font-size: 4rem;
  }
}
</style>