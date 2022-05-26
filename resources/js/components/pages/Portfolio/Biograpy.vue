<template>
  <section id="biograpy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-7 d-flex align-items-center shadow px-5">
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
        <div class="col-5 m-0 p-0 overflow-hidden">
          <img src="images/IMG_20210314_104826.jpg" class="img-fluid" alt="" />
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
  p {
    text-align: justify;
  }

  img {
    transition: 0.8s;
    filter: grayscale(100%);
  }
  img:hover {
    transform: rotate(2deg) scale(1.3);
    filter: grayscale(0%);
  }
}
</style>