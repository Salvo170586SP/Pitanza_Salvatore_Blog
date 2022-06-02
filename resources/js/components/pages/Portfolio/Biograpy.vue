<template>
  <section id="biograpy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-5 z-i">
          <p>
            Mi chiamo Salvatore, sono un Jr. Web Developer grazie al percorso
            nella web accademy Boolean Careers. <br /><br />
            Ho la passione dell'informatica, del design, ma anche un
            avventuriero tra le mie montagne. <br /><br />
            Le mie ambizioni: crescere nella mia carriera da web developer,
            imparare nuove tecnologie nel mondo della programmazione,
            approfondire nel mondo delle interfacce web e nella progettazione
            dei layout, andare in Giappone!
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Biograpy",
};
</script>

<style scoped lang="scss">
#biograpy {
  background-image: url("/images/IMG_20210314_104826.jpg");
  height: 550px;
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
    background-color: rgba(0, 0, 0, 0.521);
  }

  &:hover {
    filter: grayscale(0%);
  }

  .z-i{
    z-index: 100;
  }

  p {
    padding: 50px;
    text-align: justify;
    font-size: 15px;
    font-weight: bold;
  }
}
</style>