<template>
  <section id="cvitae">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center py-5">
          <h2>Curriculum Vitae & certificati conseguiti</h2>
        </div>
        <div class="col-12 d-flex justify-content-evenly m-0 py-5">
          <img
            src="images/Attestato_Boolean_Pitanza_Salvatore_page-0001.jpg"
            alt=""
            class="img-fluid border"
            width="300"
            @click="clickImgPrev"
          />
       
        
          <img
            src="images/Pitanza_Salvatore_cv_page-0001.jpg"
            alt=""
            class="img-fluid border"
            width="300"
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
  padding: 50px 0;
    background-color: #a7f7f7;
  img {
    transition: 0.4s cubic-bezier(0.6, -0.28, 0.74, 0.05);
    box-shadow: grey 0px 0px 15px 0px;
    cursor: pointer;
    &.active-next {
      transform: scale(2.7) translate(-30%);
      box-shadow: 0px 0px 25px 0px black;
/*  transform: rotateY(359deg) scale(2.7) translate(-30%); */
    }
    &.active-prev {
      transform: scale(2.7) translate(35%);
      /* transform: rotateY(359deg) scale(2.7) translate(35%); */
      box-shadow: 0px 0px 25px 0px black;
    }
  }
}
</style>