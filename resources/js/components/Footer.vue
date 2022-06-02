<template>
  <footer>
    <div class="container h-100">
      <div class="row h-100 pt-4">
        <div class="col-12 col-md-3 pt-3">
          <ul class="nav flex-column">
            <li class="nav-item"><h4>Contattami</h4></li>
            <li class="nav-item">
              <a
                class="nav-link ps-0 text-light"
                href="mailto:pitanza.salvatore.86@gmail.com"
                >pitanza.salvatore.86@gmail.com</a
              >
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-3 pt-3 ">
          <ul class="nav flex-column">
            <li class="nav-item"><h4>Menu</h4></li>
            <li class="nav-item">
              <router-link
                :to="{name: 'home-portfolio'}"
                class="nav-link text-light ps-0"
                >Home</router-link
              >
            </li>
            <li class="nav-item">
              <router-link
                class="nav-link ps-0 text-light"
                :to="{name: 'home-bio'}"
                >Biografia</router-link
              >
            </li>
            <li class="nav-item">
              <router-link
                class="nav-link ps-0 text-light"
                :to="{ name: 'contact-page' }"
                >Contattami</router-link
              >
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-3 pt-3">
          <ul class="nav flex-column">
            <li class="nav-item"><h4>Seguimi anche su</h4></li>
            <li class="nav-item">
              <a
                href="https://www.linkedin.com/in/salvatore-pitanza-701735191/"
                target="_blank"
                class="nav-link text-light ps-0"
                ><i class="fa-brands fa-linkedin fa-2x"></i> linkedin</a
              >
            </li>
            <li class="nav-item">
              <a
                href="https://github.com/Salvo170586SP"
                target="_blank"
                class="nav-link text-light ps-0"
                ><i class="fa-brands fa-github-square fa-2x"></i> git-hub</a
              >
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-light ps-0" target="_blank"
                ><i class="fa-brands fa-instagram fa-2x"></i> instagram</a
              >
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-3 pt-3">
          <p>
            2022 - realizzato con
            <a href="https://code.visualstudio.com/" target="_blank"
              >VisualStudioCode</a
            >
            e <a href="https://laravel.com/" target="_blank">Laravel</a> da
            <em>Pitanza Salvatore</em>
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped lang="scss">
footer {
 /*  height: 30vh; */
  /* background-color: #000a3e; */
  background-color: #232730;
  color: white;
}
</style>