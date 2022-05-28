<template>
  <section id="home-bio">
    <div class="container">
      <div class="row">
        <div class="col-12">


          <swiper
            :slidesPerView="3"
            :spaceBetween="30"
            :freeMode="true"
            :pagination="{
              clickable: true,
            }"
            :modules="modules"
            class="mySwiper"
          >
            <swiper-slide>Slide 1</swiper-slide
            ><swiper-slide>Slide 2</swiper-slide
            ><swiper-slide>Slide 3</swiper-slide
            ><swiper-slide>Slide 4</swiper-slide
            ><swiper-slide>Slide 5</swiper-slide
            ><swiper-slide>Slide 6</swiper-slide
            ><swiper-slide>Slide 7</swiper-slide
            ><swiper-slide>Slide 8</swiper-slide
            ><swiper-slide>Slide 9</swiper-slide>
          </swiper>



        </div>
        <div class="col-9">
          <h3 class="py-4">MI RACCONTO</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
            soluta dolor dignissimos culpa dicta aperiam, sed necessitatibus,
            ipsam quisquam reprehenderit deserunt cumque deleniti minus eveniet
            officiis. Aliquam iste reiciendis rem.
          </p>
        </div>

        <div class="col-3">
          <img
            src="images/140731356_4380348161981271_7614192049077160206_n.jpg"
            class="img-fluid shadow border img-bio"
            alt="img_bio"
          />
          <div class="my-4">
            <p>La citazione che più mi raffigura</p>
            <cite>
              “Troverai più nei boschi che nei libri. Gli alberi e le rocce ti
              insegneranno cose che nessun maestro ti dirà” - Bernardo di
              Chiaravalle
            </cite>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>



<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/free-mode";
import "swiper/css/pagination";

import "./style.css";

// import required modules
import { FreeMode, Pagination } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [FreeMode, Pagination],
    };
  },
};
</script>


<script>
export default {
  name: "HomeBio",
};
</script>

<style scoped lang="scss">
.splide #home-bio {
  padding: 70px 0;

  .scroller {
    max-width: 390px;
    padding: 10px;
    display: grid;
    grid-auto-flow: column;
    column-gap: 1rem;
    overflow-x: auto;
  }
  scroller::-webkit-scrollbar {
    display: none;
  }

  .scroller-item {
    position: relative;
    width: 100px;
    height: 100px;
    border: 4px solid black;
    border-radius: 50%;
  }

  .img-bio {
    height: 300px;
    width: 300px;
    object-fit: cover;
    border-radius: 50%;
    object-position: center;
  }
}
</style>