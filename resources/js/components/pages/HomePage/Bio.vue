<template>
  <section id="biograpy">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 col-md-5 z-i">
          <p>
            Mi chiamo Salvatore, sono un Jr.Web Developer, qui potete consultare i miei progetti, fare collaborazioni o chiedere preventivi per trovare una soluzione alla vostre idee.<br /><br />
            Ho la passione dell'informatica, del design, e delle mie montagne. <br> <br>
            Progetti per il futuro: <br />
            <span class="fs-4">
            Non smettere mai di esplorare!
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Bio",
};
</script>

<style scoped lang="scss">
#biograpy {
  background-image: url("/images/IMG_20210314_104826.jpg");
  height: 100vh;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  transition: 0.8s;
  filter: grayscale(100%);
  position: relative;
  color: white;

  &::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    background-color: rgb(22 28 80 / 37%);
  }

  &:hover {
    filter: grayscale(0%);
  }

  .z-i{
    z-index: 100;
  }

  p {
    text-align: justify;
  }
}
</style>