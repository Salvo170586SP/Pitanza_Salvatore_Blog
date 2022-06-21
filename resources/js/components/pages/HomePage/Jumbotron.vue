<template>
  <section id="jumbotron">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-light z-i">
          <h1>JR. WEB DEVELOPER FULLSTACK</h1>
          <h3>Di Salvatore Pitanza</h3> <br>
          <p>
            Benvenuto nella pagina dedicata al mio portfolio. <br />
            Le mie passioni, le mie competenze ed anche un pò della
            mia vita oltre il coding. 
            <br><br> <br> 
          </p>
          <p class=" lh-lg"> Scopri le mie competenze nel mondo dello
            sviluppo web</p>
            <a class="text-light lh-lg" href="#cvitae"><i class="fa-solid fa-arrow-down fa-3x arrow-icon bounce me-3"></i></a> 
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
#jumbotron {
  height: 100vh;
  background-image: url("/images/photo-1635830625698-3b9bd74671ca.avif");
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  z-index: 1;
  &::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.568);
  }
  .z-i {
    z-index: 1;
  }


  .arrow-icon {
  margin-top: 20px;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
.bounce {
  animation-name: bounce;
  animation-timing-function: ease;
}

@keyframes bounce {
  0% {
    transform: scale(1, 1) translateY(0);
  }
  50% {
    transform: scale(0.9, 1.1) translateY(-20px);
  }
  100% {
    transform: scale(1, 1) translateY(0);
  }
}
}
</style>