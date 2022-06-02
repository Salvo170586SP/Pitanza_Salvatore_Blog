<template>
  <section id="cvitae">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center py-5">
          <h2>Curriculum Vitae & certificati conseguiti</h2>
        </div>
        <div class="col-4 py-3">
          <h3 class="py-3">Competente acquisite</h3>

          <h5>HTML CSS Bootstrap</h5>
          <p class="fs-6">
            Ottime competenze in HTML, CSS e Bootstrap, adattando agevolmente i
            vari layout in modo responsive a qualunque device, che sia pc,
            tablet o mobile.
          </p>
          <br />

          <h5>JS VueJS</h5>
          <p class="fs-6">
            Con le basi in Javascript e il framework VueJS(con quest'ultimo
            associandola alla tecnologia VueRouter) riesco a progettare e
            realizzare web-app e interi siti single page, ovvero con la capacità
            di cambiare il proprio contenuto senza ricaricare la pagina,
            rendendo il tutto molto più agevole e intuitivo.
          </p>
          <br />

          <h5>PHP LARAVEL MYSQL</h5>
          <p class="fs-6">
            Ho buone conoscenze nel linguaggio php e l'ambiente lavorativo
            Laravel, con cui poter creare un back-office utile alla manutenzione
            e all'aggiornamento dei propri contenuti memorizzati nel database
            con tecnologia mysql.
          </p>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end m-0">
          <img
            src="images/Attestato_Boolean_Pitanza_Salvatore_page-0001.jpg"
            alt=""
            class="img-fluid border"
            width="250"
            @click="clickImgPrev"
          />
        </div>
        <div class=" col-4 d-flex align-items-center justify-content-start m-0">
          <img
            src="images/Pitanza_Salvatore_cv_page-0001.jpg"
            alt=""
            class="img-fluid border"
            width="250"
            @click="clickImgNext"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CVitae",
  methods: {
    clickImgPrev() {
      addEventListener("click", function (e) {
        e.target.classList.remove("active-next");
        e.target.classList.add("active-prev");

        //se clicco fuori riduco l'immagine
        this.window.addEventListener("click", function () {
          e.target.classList.remove("active-prev");
        });
      });
    },
    clickImgNext() {
      addEventListener("click", function (e) {
        e.target.classList.remove("active-prev");
        e.target.classList.add("active-next");

        // se clicco fuori riduco l'immagine
        this.window.addEventListener("click", function () {
          e.target.classList.remove("active-next");
        });
      });
    },
  },
};
</script>

<style scoped lang="scss">
#cvitae {
  padding: 20px 0;
  /* background-color: lightslategray; */
  img {
    transition: 0.4s cubic-bezier(0.6, -0.28, 0.74, 0.05);
    box-shadow: grey 0px 0px 15px 0px;
    cursor: pointer;
    &.active-next {
      transform: scale(3.5) translate(-37%);
      box-shadow: 0px 0px 25px 0px black;
      /*  transform: rotateY(359deg) scale(2.7) translate(-30%); */
    }
    &.active-prev {
      transform: scale(3.5) translate(-10%);
      /* transform: rotateY(359deg) scale(2.7) translate(35%); */
      box-shadow: 0px 0px 25px 0px black;
    }
  }
}
</style>